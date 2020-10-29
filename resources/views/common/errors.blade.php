@if(count($errors)>0)
<div class="alert alert-danger">
    <strong>唉呀！出問題了呀！</strong>
    <br><br>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$errors}}</li>
        @endforeach
    </ul>
</div>
@endif
