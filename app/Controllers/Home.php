<?php

namespace App\Controllers;
use App\Models\Student;
class Home extends BaseController
{
    public function index(): string
    {
        $stmodel = new Student();
        $data['students'] = $stmodel->findAll();
        $data['edit'] = [
            'id' => '',
            'stid'   => '',  // Empty string for 'stid'
            'stname' => '',  // Empty string for 'stname'
            'stclass' => '',  // Empty string for 'stname'
        ];
        
        return view('welcome_message',$data);
    }
    public function edit($id){
        $stmodel = new Student();
        $data['edit'] = $stmodel->find($id);
        $data['students'] = $stmodel->findAll();
        return view('welcome_message',$data);
    }
    public function save(){
        $stmodel = new Student();
        $id= $this->request->getPost('id');
        $data = array(
            'stid'=>$this->request->getPost('stid'),
            'stname'=>$this->request->getPost('stname'),
            'stclass'=>$this->request->getPost('stclass'),

        );
        if($id){
        
            $stmodel->update($id,$data);
            return redirect()->to('/')->with("success","Student Updated successfully");
        }
        else{
        $stmodel->insert($data);
        return redirect()->back()->with("success","Student Added successfully");
        }
    }
    public function delete($id){
        $stmodel = new Student();
        $stmodel->delete($id);
        return redirect()->back()->with("success","Student deleted successfully");
    }
}
