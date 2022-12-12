<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Summary;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    //Summary
    public function SummaryIndex(){
        $summary = Summary::find(1);
        return view('backend.resume.summary.index',compact('summary'));
    }

    public function SummaryUpdate(Request $request,$id){
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required|max:2000',
            'information' => 'required',
        ]);
        $data = $request->all();
        $summary = Summary::findOrFail($id);
        $summary->update($data);
        toast('Summary section updated!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('summary.index');
    }

    //Education
    public function EducationIndex(){
        $educations = Education::all();
        return view('backend.resume.education.index',compact('educations'));
    }

    public function EducationStore(Request $request){
        $this->validate($request,[
            'course' => 'required',
            'year' => 'required',
            'institution' => 'required',
        ]);
        Education::create($request->all());
        toast('Education added successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('educations.index');
    }

    public function EducationEdit($id)
    {
        $education = Education::find($id);
        return view('backend.resume.education.index',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EducationUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'course' => 'required',
            'year' => 'required',
            'institution' => 'required',
        ]);
        $education = Education::findOrFail($id);
        $education->update($request->all());
        // notify()->success('Role updated successfully!');
        toast('Education updated successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('educations.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EducationDestroy($id)
    {
        Education::find($id)->delete();
        toast('Education deleted successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('educations.index');
    }

    //Experience
    public function ExperienceIndex(){
        $experiences = Experience::all();
        return view('backend.resume.experience.index',compact('experiences'));
    }

    public function ExperienceStore(Request $request){
        $this->validate($request,[
            'post' => 'required',
            'year' => 'required',
            'company' => 'required',
        ]);
        Experience::create($request->all());
        toast('Experience added successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('experiences.index');
    }

    public function ExperienceEdit($id)
    {
        $experience = Experience::find($id);
        return view('backend.resume.experience.index',compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ExperienceUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'post' => 'required',
            'year' => 'required',
            'company' => 'required',
        ]);
        $experience = Experience::findOrFail($id);
        $experience->update($request->all());
        // notify()->success('Role updated successfully!');
        toast('Experience updated successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('experiences.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ExperienceDestroy($id)
    {
        Experience::find($id)->delete();
        toast('Experience deleted successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('experiences.index');
    }

    //Certification
    public function CertificationIndex(){
        $certifications = Certification::all();
        return view('backend.resume.certification.index',compact('certifications'));
    }

    public function CertificationStore(Request $request){
        $this->validate($request,[
            'course' => 'required',
        ]);
        Certification::create($request->all());
        toast('Certificate added successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('certifications.index');
    }

    public function CertificationEdit($id)
    {
        $certification = Certification::find($id);
        return view('backend.resume.certification.index',compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function CertificationUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'course' => 'required',
        ]);
        $certification = Certification::findOrFail($id);
        $certification->update($request->all());
        // notify()->success('Role updated successfully!');
        toast('Certificate updated successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('certifications.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function CertificationDestroy($id)
    {
        Certification::find($id)->delete();
        toast('Certificate deleted successfully!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('certifications.index');
    }
}
