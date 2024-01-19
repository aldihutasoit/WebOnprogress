<p>Dear {{$admin->name}}</p>
<p>
    kami telah mengirimkan email kepada anda untuk melakukan reset password, dengan {{$admin->email}}.
    anda bisa melakukan reset password dengan mengklik link di bawah ini
    <br> <br>
    <a href="{{$actionLink}}" target="_blank" style="color: #fff; border-color:aquamarine;border-style:solid;border-width:5px 10px; background-color:blueviolet;display:inline-block; 
    text-decoration:none;border-radius:3px; box-shadow: 0 2px 3px rgba(0,0,0,0.16);-webkit-text-size-adjust:none; box-sizing:border-box;">reset password</a>
    <br>
    <b>NB:</b> link ini hanya dapat di akses dalam 15 menit, segera lakukan reset password
    <br>
    jika anda, tidak pernah melakukan reset password tolong hiraukan pesan ini.
</p>