<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

//imagesize_1.51mb

class liveness_detection_digidataTest extends TestCase
{
    use WithoutMiddleware;

    public function test_livenessdetectiondigidata_2gesture_smallsize_1()
    {
        $data = [
            'file' => [
                        //gesture 5
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-9-20220714202326.jpeg'), 'public/smallsize/liveness_liveness-2280-5-9-20220714202326.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-10-20220714202327.jpeg'), 'public/smallsize/liveness_liveness-2280-5-10-20220714202327.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-11-20220714202328.jpeg'), 'public/smallsize/liveness_liveness-2280-5-11-20220714202328.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-12-20220714202329.jpeg'), 'public/smallsize/liveness_liveness-2280-5-12-20220714202329.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-13-20220714202330.jpeg'), 'public/smallsize/liveness_liveness-2280-5-13-20220714202330.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-14-20220714202331.jpeg'), 'public/smallsize/liveness_liveness-2280-5-14-20220714202331.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-15-20220714202332.jpeg'), 'public/smallsize/liveness_liveness-2280-5-15-20220714202332.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-16-20220714202333.jpeg'), 'public/smallsize/liveness_liveness-2280-5-16-20220714202333.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-0-20220714202314.jpeg'), 'public/smallsize/liveness_liveness-2280-7-0-20220714202314.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-1-20220714202315.jpeg'), 'public/smallsize/liveness_liveness-2280-7-1-20220714202315.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-2-20220714202316.jpeg'), 'public/smallsize/liveness_liveness-2280-7-2-20220714202316.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-3-20220714202317.jpeg'), 'public/smallsize/liveness_liveness-2280-7-3-20220714202317.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-4-20220714202318.jpeg'), 'public/smallsize/liveness_liveness-2280-7-4-20220714202318.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-5-20220714202319.jpeg'), 'public/smallsize/liveness_liveness-2280-7-5-20220714202319.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-6-20220714202320.jpeg'), 'public/smallsize/liveness_liveness-2280-7-6-20220714202320.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-7-20220714202321.jpeg'), 'public/smallsize/liveness_liveness-2280-7-7-20220714202321.jpeg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => true]    
                                ]
                            );
    }


    public function test_livenessdetectiondigidata_2gesture_smallsize_2()
    {
        $data = [
            'file' => [
                        //gesture 5
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-9-20220714202326.jpeg'), 'public/smallsize/liveness_liveness-2280-5-9-20220714202326.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-10-20220714202327.jpeg'), 'public/smallsize/liveness_liveness-2280-5-10-20220714202327.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-11-20220714202328.jpeg'), 'public/smallsize/liveness_liveness-2280-5-11-20220714202328.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-12-20220714202329.jpeg'), 'public/smallsize/liveness_liveness-2280-5-12-20220714202329.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-13-20220714202330.jpeg'), 'public/smallsize/liveness_liveness-2280-5-13-20220714202330.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-14-20220714202331.jpeg'), 'public/smallsize/liveness_liveness-2280-5-14-20220714202331.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-15-20220714202332.jpeg'), 'public/smallsize/liveness_liveness-2280-5-15-20220714202332.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-16-20220714202333.jpeg'), 'public/smallsize/liveness_liveness-2280-5-16-20220714202333.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-0-20220714202314.jpeg'), 'public/smallsize/liveness_liveness-2280-7-0-20220714202314.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-1-20220714202315.jpeg'), 'public/smallsize/liveness_liveness-2280-7-1-20220714202315.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-2-20220714202316.jpeg'), 'public/smallsize/liveness_liveness-2280-7-2-20220714202316.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-3-20220714202317.jpeg'), 'public/smallsize/liveness_liveness-2280-7-3-20220714202317.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-4-20220714202318.jpeg'), 'public/smallsize/liveness_liveness-2280-7-4-20220714202318.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-5-20220714202319.jpeg'), 'public/smallsize/liveness_liveness-2280-7-5-20220714202319.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-6-20220714202320.jpeg'), 'public/smallsize/liveness_liveness-2280-7-6-20220714202320.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-7-20220714202321.jpeg'), 'public/smallsize/liveness_liveness-2280-7-7-20220714202321.jpeg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => true]    
                                ]
                            );
    }


    public function test_livenessdetectiondigidata_2gesture_smallsize_3()
    {
        $data = [
            'file' => [
                        //gesture 5
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-9-20220714202326.jpeg'), 'public/smallsize/liveness_liveness-2280-5-9-20220714202326.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-10-20220714202327.jpeg'), 'public/smallsize/liveness_liveness-2280-5-10-20220714202327.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-11-20220714202328.jpeg'), 'public/smallsize/liveness_liveness-2280-5-11-20220714202328.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-12-20220714202329.jpeg'), 'public/smallsize/liveness_liveness-2280-5-12-20220714202329.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-13-20220714202330.jpeg'), 'public/smallsize/liveness_liveness-2280-5-13-20220714202330.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-14-20220714202331.jpeg'), 'public/smallsize/liveness_liveness-2280-5-14-20220714202331.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-15-20220714202332.jpeg'), 'public/smallsize/liveness_liveness-2280-5-15-20220714202332.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-16-20220714202333.jpeg'), 'public/smallsize/liveness_liveness-2280-5-16-20220714202333.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-0-20220714202314.jpeg'), 'public/smallsize/liveness_liveness-2280-7-0-20220714202314.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-1-20220714202315.jpeg'), 'public/smallsize/liveness_liveness-2280-7-1-20220714202315.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-2-20220714202316.jpeg'), 'public/smallsize/liveness_liveness-2280-7-2-20220714202316.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-3-20220714202317.jpeg'), 'public/smallsize/liveness_liveness-2280-7-3-20220714202317.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-4-20220714202318.jpeg'), 'public/smallsize/liveness_liveness-2280-7-4-20220714202318.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-5-20220714202319.jpeg'), 'public/smallsize/liveness_liveness-2280-7-5-20220714202319.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-6-20220714202320.jpeg'), 'public/smallsize/liveness_liveness-2280-7-6-20220714202320.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-7-20220714202321.jpeg'), 'public/smallsize/liveness_liveness-2280-7-7-20220714202321.jpeg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => true]    
                                ]
                            );
    }


    public function test_livenessdetectiondigidata_2gesture_smallsize_4()
    {
        $data = [
            'file' => [
                        //gesture 5
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-9-20220714202326.jpeg'), 'public/smallsize/liveness_liveness-2280-5-9-20220714202326.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-10-20220714202327.jpeg'), 'public/smallsize/liveness_liveness-2280-5-10-20220714202327.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-11-20220714202328.jpeg'), 'public/smallsize/liveness_liveness-2280-5-11-20220714202328.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-12-20220714202329.jpeg'), 'public/smallsize/liveness_liveness-2280-5-12-20220714202329.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-13-20220714202330.jpeg'), 'public/smallsize/liveness_liveness-2280-5-13-20220714202330.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-14-20220714202331.jpeg'), 'public/smallsize/liveness_liveness-2280-5-14-20220714202331.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-15-20220714202332.jpeg'), 'public/smallsize/liveness_liveness-2280-5-15-20220714202332.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-16-20220714202333.jpeg'), 'public/smallsize/liveness_liveness-2280-5-16-20220714202333.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-0-20220714202314.jpeg'), 'public/smallsize/liveness_liveness-2280-7-0-20220714202314.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-1-20220714202315.jpeg'), 'public/smallsize/liveness_liveness-2280-7-1-20220714202315.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-2-20220714202316.jpeg'), 'public/smallsize/liveness_liveness-2280-7-2-20220714202316.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-3-20220714202317.jpeg'), 'public/smallsize/liveness_liveness-2280-7-3-20220714202317.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-4-20220714202318.jpeg'), 'public/smallsize/liveness_liveness-2280-7-4-20220714202318.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-5-20220714202319.jpeg'), 'public/smallsize/liveness_liveness-2280-7-5-20220714202319.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-6-20220714202320.jpeg'), 'public/smallsize/liveness_liveness-2280-7-6-20220714202320.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-7-20220714202321.jpeg'), 'public/smallsize/liveness_liveness-2280-7-7-20220714202321.jpeg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => true]    
                                ]
                            );
    }


    public function test_livenessdetectiondigidata_2gesture_smallsize_false()
    {
        $data = [
            'file' => [
                        //gesture 5
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-9-20220714202326.jpeg'), 'public/smallsize/liveness_liveness-2280-5-9-20220714202326.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-10-20220714202327.jpeg'), 'public/smallsize/liveness_liveness-2280-5-10-20220714202327.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-11-20220714202328.jpeg'), 'public/smallsize/liveness_liveness-2280-5-11-20220714202328.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-12-20220714202329.jpeg'), 'public/smallsize/liveness_liveness-2280-5-12-20220714202329.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-13-20220714202330.jpeg'), 'public/smallsize/liveness_liveness-2280-5-13-20220714202330.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-14-20220714202331.jpeg'), 'public/smallsize/liveness_liveness-2280-5-14-20220714202331.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-15-20220714202332.jpeg'), 'public/smallsize/liveness_liveness-2280-5-15-20220714202332.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-5-16-20220714202333.jpeg'), 'public/smallsize/liveness_liveness-2280-5-16-20220714202333.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-0-20220714202314.jpeg'), 'public/smallsize/liveness_liveness-2280-7-0-20220714202314.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-1-20220714202315.jpeg'), 'public/smallsize/liveness_liveness-2280-7-1-20220714202315.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-2-20220714202316.jpeg'), 'public/smallsize/liveness_liveness-2280-7-2-20220714202316.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-3-20220714202317.jpeg'), 'public/smallsize/liveness_liveness-2280-7-3-20220714202317.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-4-20220714202318.jpeg'), 'public/smallsize/liveness_liveness-2280-7-4-20220714202318.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-5-20220714202319.jpeg'), 'public/smallsize/liveness_liveness-2280-7-5-20220714202319.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-6-20220714202320.jpeg'), 'public/smallsize/liveness_liveness-2280-7-6-20220714202320.jpeg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\smallsize\liveness_liveness-2280-7-7-20220714202321.jpeg'), 'public/smallsize/liveness_liveness-2280-7-7-20220714202321.jpeg', null, null, true),
                    ],
            'gestures_set' => '1','0'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => false]    
                                ]
                            );
    }
}






