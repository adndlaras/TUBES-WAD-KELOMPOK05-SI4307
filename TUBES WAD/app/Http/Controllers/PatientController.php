<?php

namespace App\Http\Controllers;

    use App\Models\patient;
    use Illuminate\Http\Request;

    class PatientController extends Controller
    {
        public function index()
        {
            $patients = Patient::all();

            return view('patient.index', compact('patients'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create($id)
        {
            return view('patient.create', compact('id'));
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

            if ($request->file('image_ktp')) {
                $data['image_ktp'] = $request->file('image_ktp')->store('image_ktp', 'public');
            }

            Patient::create($data);

            return redirect()->route('patient.index')->with('success', 'Data Pasien Berhasil Dibuat');
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
            $patient = Patient::find($id);

            return view('patient.edit', compact('patient'));
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

            if ($request->file('image_ktp')) {
                $data['image_ktp'] = $request->file('image_ktp')->store('image_ktp', 'public');
            }

            Patient::find($id)->update($data);

            return redirect()->route('patient.index')->with('success', 'Data Pasien Berhasil Diupdate');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Patient::find($id)->delete();

            return redirect()->route('patient.index')->with('success', 'Data Pasien Berhasil Dihapus');
        }
    }
