<?php

class BackendController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /backend
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.index');
	}


    /**
     * Displays all the stations and paginates 30 per page if they are greater than 50
     */

    public function  stations(){
        $sts = Station::paginate(20);
        return View::make('backend.stations')->with('sts', $sts);

    }


    /**
     * Displays all the radio Station categories and paginates them if they are greater than 50
     */
    public  function  category(){
        $cats = Category::paginate(20);
        return View::make('backend.category')->with('cats',$cats);

    }


    /**
     * @return View containing a form to create a new category
     */

    public  function addcategory(){

        return View::make('backend.addcategory');
    }


    /**
     * crates a new catefory
     * @return redirect to the category lists
     */

        public  function createcategory(){
            $cat = new Category(Input::all());

            if ($cat->save())
            {
                return Redirect::to('admin/category') ->with('message', 'A new category has been added');
            }

            return Redirect::back()->withInput()->withErrors($cat->getErrors());

        }




        public  function destroycategory($id){

            $cat = Category::findorfail($id);

            $cat->delete();

            return Redirect::to('admin/category') ->with('message', 'Category has been deleted');

        }


            public  function  categoryupdate($id){


                return View::make('backend.categoryupdate')->with('cat',  Category::findorfail($id));
            }


            public  function postcategoryupdate($id)
            {
                $cat = Category::findorfail($id);
                $cat->fill(Input::all());
                $cat->save();
                return Redirect::to('admin/category') ->with('message', 'Category update successful');


            }


    /**
     * @return mixed
     * dislays the form to create a new radio station
     */

    public  function addstations(){

        $cat = Category::lists('name', 'id');
        $ct = Country::lists('name', 'id');
        return View::make('backend.addstations')->with(array('cat'=>$cat, 'ct'=>$ct));
    }


    /**
     * @return mixed
     * creates a state from details submitted from the form
     */

    public  function createstation(){



        if (Input::file('logo')->isValid())
        {

            Input::file('logo')->move(public_path().'/img', Input::file('logo')->getClientOriginalName());

        }


        $st = new Station(Input::all());


        $st->logo = Input::file('logo')->getClientOriginalName();

        if ($st->save())
        {
            return Redirect::to('admin/stations') ->with('message', 'A new Radio has been added');
        }

        return Redirect::back()->withInput()->withErrors($st->getErrors());
    }


    /**
     * @param $id
     * @return mixed
     * deletes a new station
     */
    public function stationdelete($id){
        $cat = Station::findorfail($id);

        $cat->delete();

        return Redirect::to('admin/stations') ->with('message', 'Station has been deleted');

    }



    public  function stationupdate($id){

        $cat = Category::lists('name', 'id');
        $ct = Country::lists('name', 'id');
        return View::make('backend.stationupdate')->with(array('cat'=>$cat, 'ct'=>$ct, 'st'=> Station::findorfail($id) ));


    }


    public  function stationupdatesave($id){
        $cat = Station::findorfail($id);
        $cat->fill(Input::all());


        if((!empty( Input::file('logo')  ))){
            if (Input::file('logo')->isValid())
            {

                Input::file('logo')->move(public_path().'/img', Input::file('logo')->getClientOriginalName());
                $cat->logo = Input::file('logo')->getClientOriginalName();
            }

        }







        $cat->save();
        return Redirect::to('admin/stations') ->with('message', 'Station update successful');

    }



    public function  updateaccount(){

        return View::make('backend.updateaccount')->with('user', Auth::user());
    }

    public function updateaccountsave(){

        $user = Auth::user();
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->save();
        return Redirect::to('/dashboard');
    }





    public  function  stationview($id){

        $ct = Station::findorfail($id);
        return View::make('backend.stationview')->with('ct', $ct);

    }


    public function updateaccountpassword()
    {
        return View::make('backend.updateaccountpassword');

    }







}