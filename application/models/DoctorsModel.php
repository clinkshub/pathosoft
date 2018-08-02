<?php
class DoctorsModel extends CI_Model{
    protected $globalData=array(
        'table'=>'doctors'
    );
    function getDoctorList($requestData){
        $columns = array( 
            // datatable column index  => database column name
                0 =>'id', 
                1 =>'fullname',
                2 =>'address1',
                3 =>'area',
                4=> 'gender',
                5=> 'dob',
                6=> 'id'
        );
            
        // getting total number records without any search
        $sql = "SELECT*";
        $sql.=" FROM ".$this->globalData['table']." where 1=1 and active=1 ";
        
        $totalData = Mainmodel::query_execution($sql);
        $totalData = sizeof($totalData);

        if( !empty($requestData['search']['value']) ) {
            $sql.=" AND ( fullname LIKE '%".$requestData['search']['value']."%' )";
        }
        
        $totalFiltered = Mainmodel::query_execution($sql);
        $totalFiltered = sizeof($totalFiltered);
        
        $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]." ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']." ";
        
        $query=Mainmodel::query_execution($sql);
        $sr=$requestData['start'];
        $data = array();
        foreach( $query as $row) {  
            $sr++;
            $nestedData=array(); 
            $nestedData[] = '<input type="checkbox" name="selectedid[]" id="basic_checkbox_'.$row->id.'" class="filled-in" value="'.$row->id.'" />
            <label for="basic_checkbox_'.$row->id.'"></label>';

            $nestedData[] = $sr;
            $nestedData[] = '<a href="'.site_url("masters/doctors/show/".$row->id).'">'.$row->fullname."</a>";
            $nestedData[] = $row->address1;
            $nestedData[] = $row->area;
            $nestedData[] = $row->gender;
            $nestedData[] = date("d/M/Y",strtotime($row->dob));
            $nestedData[] = '<a class="btn btn-xs btn-info" href="'.site_url("masters/doctors/show/".$row->id).'"><i class="fa fa-eye"></i></a>'.
                            '<a class="btn btn-xs btn-warning" href="'.site_url("masters/doctors/edit/".$row->id).'"><i class="fa fa-pencil"></i></a>'.
                            '<a href="#" class="btn btn-xs btn-danger delete" data-id="'.$row->id.'"><i class="fa fa-times"></i></a>'
            ;
            $data[] = $nestedData;
        }
        
        $json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);
        return $json_data;
    }
    function save($data){
        $dob=$data["dob"];
        $data['dob']=Mainmodel::changedateformat($dob);
        return Mainmodel::save($data,$this->globalData['table']);
    }
}