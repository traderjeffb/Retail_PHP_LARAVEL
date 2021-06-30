{{ $myId }} 
<h1> getting info page</h1>

<form name="getting-info-form" id="getting-info-form" method="post"  action="{{url('store')}}"
  <label for="name">type your name</label>
  <input name="name" id="name" type="text">

  <label for="email">enter your email</label>
  <input name="email" id="email" type="email">
</form>