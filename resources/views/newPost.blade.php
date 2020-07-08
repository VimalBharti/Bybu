<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin add new post</title>
  </head>
  <body>
    <style>
        body {
            font: 400 14px Roboto, sans-serif;
            background: #f6f4fc;
            -webkit-font-smoothing: antialiased;
            margin: 0;
            padding: 0;
            outline: 0;
            box-sizing: border-box;
            }

            em {
            font-style: normal;
            }

            a {
            text-decoration: none;
            color: inherit;
            }

            .layout {
            display: flex;
            align-items: center;
            justify-content: right;
            padding: 0 16px;
            background-color: #f6f4fc;
            margin: 0 20px;
            }

            .content {
            display: flex;
            justify-content: center;
            align-items: top;
            flex: 1;
            margin: 5.5em 0;
            width: 100%;
            min-width: 260px;
            }

            .main-header {
            background-color: #fefefe;
            border-radius: 40px;
            padding: 20px;
            width: 100%;
            max-width: 650px;
            }
            textarea{
                width:100%;
                margin-top: 1em;
            }

            .main-title {
            width: 100%;
            }

            .main-header .main-title h1 {
            margin: 30px;
            font-size: 42px;
            color: #d34c64;
            }

            .main-form {
            display: flex;
            align-items: center;
            justify-content: center;
            }

            .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4em;
            background-color: #f6f4fc;
            border-top: 1px solid #b3b3b3;
            }

            .footer_sign {
            position: absolute;
            top: 50%;
            right: 1em;
            transform: translateY(-50%);
            font-size: 14px;
            color: #b3b3b3;
            }

            .footer_sign span,
            a {
            color: #49c1c3;
            text-decoration: none;
            }

            .header {
            z-index: 2;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4em;
            background-color: #f6f4fc;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5em;
            border-bottom: 1px solid #d34c64;
            }

            .header-user {
            font-size: 1.2em;
            color: #d34c64;
            }

            .header-user > i {
            padding-right: 10px;
            }

            /* ==== sidebar ==== */

            *,
            *::before,
            *::after {
            box-sizing: border-box;
            }

            .sidebar {
            position: fixed;
            top: 0;
            left: -15em;
            overflow: hidden;
            transition: all 0.3s ease-in;
            width: 15em;
            height: 100%;
            background: #fefefe;
            font-size: 1.2em;
            }

            .active {
            color: #d34c64;
            background-color: #f5f8fe;
            border-right: 2px solid #d34c64;
            }

            .sidebar:hover,
            .sidebar:focus,
            .header:focus + .sidebar,
            .header:hover + .sidebar {
            left: 0;
            }

            .sidebar ul {
            position: absolute;
            top: 4em;
            left: 0;
            margin: 0;
            padding: 0;
            width: 15em;
            }

            .sidebar ul li {
            width: 100%;
            }

            .sidebar-list-item {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 3em;
            color: #394951;
            }

            .sidebar-list-item em {
            position: absolute;
            top: 50%;
            left: 4em;
            transform: translateY(-50%);
            }

            .sidebar-list-item:hover {
            background: #f5f8fe;
            }

            .sidebar-list-item > i {
            position: absolute;
            top: 0;
            left: 0;
            display: inline-block;
            width: 4em;
            height: 3em;
            }

            .sidebar-list-item > i::before {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

            @media (min-width: 42em) {
            .content {
                margin-left: 5em;
            }

            .sidebar {
                width: 4em;
                left: 0;
            }

            .sidebar:hover,
            .sidebar:focus,
            .header:hover + .sidebar,
            .header:focus + .sidebar {
                width: 15em;
            }
            }

            @media (min-width: 68em) {
            .content {
                margin-left: 18em;
            }

            .sidebar {
                width: 15em;
            }
            }

            /* ==== form ==== */

            input,
            button,
            textarea {
            font: 400 14px Roboto, sans-serif;
            }

            form input {
            width: 100%;
            height: 50px;
            color: #a6a6a6;
            border: 1px solid #dcdce6;
            border-radius: 8px;
            padding: 0 15px;
            }

            .main-header .main-form form {
            width: 100%;
            max-width: 550px;
            }

            .main-header .main-form form input {
            margin-top: 8px;
            }

            .main-header .main-form form .input-group {
            display: flex;
            align-items: center;
            justify-content: center;
            }

            .input-hour {
            height: 50px;
            }

            #fhourdiv {
            display: flex;
            align-items: center;
            justify-content: space-between;
            }

            #fhourdiv > input {
            width: 47%;
            }

            .main-header .main-form form .input-group input + input {
            margin-right: 8px;
            }

            .main-header .main-form form .input-group .all_day {
            width: 120px;
            height: 50px;
            text-align: right;
            padding: 18px 0;
            margin-top: 8px;
            color: #a6a6a6;
            }

            .main-header .main-form form .input-group .checkbox {
            width: 60px;
            height: 30px;
            color: #a6a6a6;
            border: 1px solid #dcdce6;
            border-radius: 10px;
            margin-left: 10px;
            }

            .main-header .main-form form .input-group .hour {
            width: 219px;
            }

            .main-header .main-form form .button {
            width: 100%;
            height: 60px;
            /* background: #d34c64; */
            background: #d34c64;
            border: 0;
            border-radius: 10px;
            color: #fff;
            font-weight: 700;
            margin: 20px 0 15px 0;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            transition: filter 0.2s;
            cursor: pointer;
            }

            .button:hover {
            filter: brightness(90%);
            }
  </style>

  
    <div class="layout">

        <a class="header" href="#0">
        <i class="fa fa-bars"></i>
        <div class="header-user"><i class="fas fa-user-circle icon"></i>Hello Bybu Admin</div>
        </a>

        <div class="sidebar">
        <ul>
            <li> <a class="sidebar-list-item" href="#"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
            <li> <a class="sidebar-list-item" href="#"> <i class="fas fa-user icon"></i><em>Users</em></a></li>
            <li> <a class="sidebar-list-item" href="#"> <i class="fas fa-tasks icon"></i><em>Projects</em></a></li>
            <li> <a class="sidebar-list-item active" href="#"> <i class="fas fa-calendar icon"></i><em>Events</em></a>
            </li>
            <li> <a class="sidebar-list-item" href="#"> <i class="fas fa-toolbox icon"></i><em>Preferences</em></a>
            </li>
            <li> <a class="sidebar-list-item" href="#"> <i class="fas fa-comments icon"></i><em>Feedback</em></a></li>
            <li>
                <a class="sidebar-list-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-comments icon"></i><em>Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        </div>

        <main class="content">
        <div class="main-header">
            <div class="main-title">
            <h1>New Event</h1>
            </div>
            <div class="main-form">
            <form action="{{route('save-post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="text" placeholder="Add title" name="title">
                    <input type="text" placeholder="Title Color" name="title_color">
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Designer Name" name="designer">
                    <input type="text" placeholder="Designer Profile Link" name="designer_link">
                </div>

                <div class="input-group">
                    <textarea name="description" placeholder="Description" rows="5"></textarea>
                </div>

                <div class="input-group">
                    <textarea name="markup" placeholder="Markup" rows="10"></textarea>
                </div>
                <div class="input-group">
                    <textarea name="css" placeholder="Css" rows="10"></textarea>
                </div>

                <input type="file" name="image">

                <input type="submit" id="fsubmit" value="Save" class="button">
            </form>
            </div>
        </div>
        </main>

        <footer class="footer">
        <div class="footer_sign">made with <span class="fas fa-heart"></span> by <a>bybu</a></div>
        </footer>

        </div>
  </body>
</html>