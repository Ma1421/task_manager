<?php

namespace App\Http\Controllers;

use App\Models\Task; // Taskモデルのインポート
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // タスク一覧表示
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // 新規タスクの作成
    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('tasks.index');
    }
    // 新規タスク作成フォーム表示
    public function create()
    {
        return view('tasks.create'); // create.blade.php ビューを表示
    }
    // タスクの編集・更新
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    // タスクの削除
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
