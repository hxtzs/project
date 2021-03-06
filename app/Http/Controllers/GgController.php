<?php

namespace App\Http\Controllers;

use App\Gg;
use Illuminate\Http\Request;

class GgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $Gg = Gg::where('user_id','like', '%'.request()->keywords.'%')
            ->paginate(6);
            
        //解析模板显示用户数据
        return view('admin.guanggao.index', ['Gg'=>$Gg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.guanggao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Gg = new Gg; 
        $Gg -> user_id = $request ->user_id;
        $Gg -> xxcate_id = $request ->xxcate_id;
        $Gg -> intro = $request ->intro;
        $Gg -> image = $request ->image;
        $Gg -> cheng = $request ->cheng;
        $Gg -> money = $request ->money;
        $Gg -> quyu = $request ->quyu;
        $Gg -> orby = $request ->orby;

        if ($request->hasFile('image')) {
            $Gg->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($Gg -> save()){
            return redirect('guanggao')->with('success', '添加成功');
        }else{
            return back()->with('error','添加失败');
        }
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
        //获取用户的信息
        $Gg = Gg::findOrFail($id);
        //解析模板显示数据
        return view('admin.guanggao.edit', ['Gg'=>$Gg]);
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
        //获取广告的信息
        $Gg = Gg::findOrFail($id);

        //更新 
        $Gg -> intro = $request ->intro;
        $Gg -> xxcate_id = $request ->xxcate_id;
        $Gg -> cheng = $request ->cheng;
        $Gg -> money = $request ->money;
        $Gg -> quyu = $request ->quyu;
        $Gg -> orby = $request ->orby;
        $Gg -> image = $request ->image;
        // dd ($Gg);
        if ($request->hasFile('image')) {
            $Gg->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }
        if($Gg->save()){
            return redirect('/guanggao')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Gg = Gg::findOrFail($id);
        if($Gg->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
