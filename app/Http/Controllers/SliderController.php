<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $momna=['https://edu.abidingtech.com/assets/images/slides/48432_EduSlide.png','https://edu.abidingtech.com/assets/images/slides/14229_banner%201.png','https://edu.abidingtech.com/assets/images/slides/AbidingTechComputerEducationslide2.png'];


        $objectives=[];
        $objectives[]=$this->getObject("https://edu.abidingtech.com/assets/images/others/evolution.png","ROBOTICS","We are the Pioneers of Robotics in Gujranwala. Robotics is an introductory and also advance course in robots. There are two main classes of industrial robots – continuous path robots.","https://edu.abidingtech.com/search?search=ROBOTICS");

        $objectives[]=$this->getObject('https://edu.abidingtech.com/assets/images/others/fypsmall.png',"FYP PREPARATION","Some Students face problems in their FYP. As a consequences, our three day course is currently designed to prepare end of final year students for their project.","https://edu.abidingtech.com/search?search=ROBOTICS");

            $objectives[]=$this->getObject('https://edu.abidingtech.com/assets/images/others/webDevz.png',"WEB DEVELOPMENT","Some Students face problems in their FYP. As a consequences, our three day course is currently designed to prepare end of final year students for their project.","https://edu.abidingtech.com/search?search=ROBOTICS");

                $objectives[]=$this->getObject("https://edu.abidingtech.com/assets/images/others/evolution.png","ROBOTICS","We are the Pioneers of Robotics in Gujranwala. Robotics is an introductory and also advance course in robots. There are two main classes of industrial robots – continuous path robots.","https://edu.abidingtech.com/search?search=ROBOTICS");

                $objectives[]=$this->getObject('https://edu.abidingtech.com/assets/images/others/fypsmall.png',"FYP PREPARATION","Some Students face problems in their FYP. As a consequences, our three day course is currently designed to prepare end of final year students for their project.","https://edu.abidingtech.com/search?search=ROBOTICS");



        return view('slider.index',compact('momna','objectives'));
    }
    public function getObject($img,$title,$detail,$url)
    {
        $objective=new Objective();
        $objective->img=$img;
        $objective->title=$title;
        $objective->detail=$detail;
        $objective->url=$url;
        return $objective;
    }
}
