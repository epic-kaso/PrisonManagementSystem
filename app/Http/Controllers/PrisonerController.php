<?php

namespace PrisonManagementSystem\Http\Controllers;

use Request;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Prisoner;
use Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Validator;

class PrisonerController extends Controller
{
    protected $validationRules = [
        'last_name' => 'required|max:255',
        'first_name' => 'required|max:255',
        'genotype' => 'required',
        'sex' => 'required',
        'medical_status' => '',
        'court' => '',
        'crime_code' => '',
        'cell_roommate' => '',
        'blood_group' => 'required',
        'birth_date' => 'required|date',
        'next_of_kin' => 'required',
        'next_of_kin_phone' => 'required',
        'right_mug_shot' => 'required|image',
        'left_mug_shot' => 'required|image',
        'center_mug_shot' => 'required|image',
        'crime' => 'required',
        'sentence' => 'required',
        'arresting_officer' => '',
        'address' => '',
        'sentence_start' => 'required|date',
        'sentence_end' => 'required|date'
    ];
    private $destinationPath;

    private $leftMugshotName = 'left_mug_shot';

    private $centerMugshotName = 'center_mug_shot';

    private $rightMugshotName = 'right_mug_shot';

    function __construct()
    {
        $this->destinationPath = storage_path('prisoners');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $prisoners = Prisoner::paginate(30);
        return view('prisoner.index',['prisoners' => $prisoners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('prisoner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validation = $this->validator(Request::all());

        if($validation->fails()){
            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validation);
        }

        $data = Request::only($this->requiredkeys());

        unset($data[$this->leftMugshotName]);
        unset($data[$this->centerMugshotName]);
        unset($data[$this->rightMugshotName]);

        $prisoner = Prisoner::create($data);

        $prisoner->left_mug_shot = $this->uploadImage(Request::file($this->leftMugshotName),$this->generatePictureName($this->leftMugshotName,$prisoner));
        $prisoner->center_mug_shot = $this->uploadImage(Request::file($this->centerMugshotName),$this->generatePictureName($this->centerMugshotName,$prisoner));
        $prisoner->right_mug_shot = $this->uploadImage(Request::file($this->rightMugshotName),$this->generatePictureName($this->rightMugshotName,$prisoner));

        $prisoner->save();

        return redirect(route('prisoner.show',['id'=> $prisoner->id]))->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $prisoner = Prisoner::findOrFail($id);
        return view('prisoner.show',['prisoner' => $prisoner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $prisoner = Prisoner::findOrFail($id);
        return view('prisoner.edit',['prisoner' => $prisoner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $prisoner = Prisoner::findOrFail($id);
        $prisoner->delete();
        Session::flash('success_msg','Prisoner Deleted Successfully');
        return redirect(route('prisoner.index'));
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,$this->validationRules);
    }

    protected function requiredkeys(){
        return array_keys($this->validationRules);
    }

    private function uploadImage(UploadedFile $file,$name)
    {
        $ext = $file->getClientOriginalExtension();
        if(!file_exists($this->destinationPath)){
            @mkdir($this->destinationPath,true);
        }
        $file->move($this->destinationPath, $name.".".$ext);
        return $name.".".$ext;
    }

    private function generatePictureName($baseName,Prisoner $prisoner)
    {
        return "prisoner_".$prisoner->id."_".$baseName;
    }

    public function getTransfer()
    {

    }

    public function postTransfer()
    {

    }

    public function getAcquit()
    {

    }

    public function postAcquit()
    {

    }

    public function getRehab()
    {

    }

    public function postRehab()
    {

    }
}
