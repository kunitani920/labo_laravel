<?php
namespace App\Http\Controllers;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        //データの追加　emailの値はランダムな文字列を使用。「.」で文字列の連結
        $email = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 8) . '@yyyy.com';
        User::insert(['name' => 'yamada taro', 'email' => $email, 'password' => 'xxxxxxx']);
        //全データの取り出し
        $users = User::all();
        return view('user', ['users' => $users]);
        //今回はただの変数定義だが、ここでModelにデータの処理を行わせたりする。
        $name = 'yamada toro';

        //ここでuserビュー「user.blade.php」を呼び出し、データ「name」を渡している。
        return view('user', ['name' => $name]);
    }
}

?>