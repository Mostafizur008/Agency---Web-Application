<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
    #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #ffffff;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
       
          color: rgb(0, 0, 0);
        }
          #main_header2 {
           margin-top: 0!important;
          }
        #main_header2 {
        height: auto;
        background-color: #00909b;
        text-align: center;
        }
        .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
        border: 1px solid #ddd;
         }
       .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 8px;
        line-height: 1.42857143;
       }
       .btn-success {
        color: #fff;
        background-color: #00909b;
        border-color: #00909b;
         }
       table {
        border-collapse: collapse;
        }
</style>
</head>
<body>

  @php
  $setting = DB::table('settings')->first();
  @endphp
  


  <img style="position:absolute;top:0.10in;left:2.62in;width:2.07in;height:.57in" src="{{public_path('backend/all-images/web/logo/'.$setting->image)}}"/>
  <div style="position:absolute;top:0.80in;left:2.84in;width:5.22in;line-height:0.20in;">
  <span style="font-style:normal;font-weight:normal;font-size:15pt;font-family:Helvetica;color:#000000">{{$setting->title}}</span></div>
  <div style="position:absolute;top:0.94in;left:1.84in;width:5.22in;line-height:0.33in;">
  <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">{{$setting->address}}</span>
  </div>

  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>

        
        <table id="customers">
          <tbody>
            <tr>
              <td>Name</td><td>{{$detail->name}}</td>
              <td>Ticket No.</td><td>[ NOT SHOW ]</td>
            </tr>
            <tr>
              <td>Email</td><td>{{$detail->email}}</td>
              <td>Mobile</td><td>{{$detail->mobile}}</td>
            </tr>
            <tr>
            <td>Subject</td><td colspan="3">{{$detail->subject}}</td>
            </tr>
            <tr>
            <td colspan="4">{{$detail->message}}</td>
            </tr>
          </tbody>
        </table>
</body>
</html>
 