<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

    class VaccineController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $vaccines = Vaccine::all();

            return view('vaccine.index', compact('vaccines'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('vaccine.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $data = $request->all();

            if ($request->file('image')) {
                $data['image'] = $request->file('image')->store('image', 'public');
            }

            Vaccine::create($data);

            return redirect()->route('vaccine.index')->with('success', 'Data Vaksin Berhasil Dibuat');
        }

        public function list()
        {
            $vaccines = Vaccine::all();

            return view('vaccine.list', compact('vaccines'));
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $vaccine = Vaccine::find($id);

            return view('vaccine.edit', compact('vaccine'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $data = $request->all();

            if ($request->file('image')) {
                $data['image'] = $request->file('image')->store('image', 'public');
            }

            Vaccine::find($id)->update($data);

            return redirect()->route('vaccine.index')->with('success', 'Data Vaksin Berhasil Diupdate');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Vaccine::find($id)->delete();

            return redirect()->back()->with('success', 'Data Vaksin Berhasil Dihapus');
        }
    }
