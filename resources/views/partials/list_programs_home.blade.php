<h2 class="title">Chương trình đang luyện tập</h2>
@if(!session('programs'))
	@foreach($programs as $program)
    <div class="col">
        <div class="col-md-4 column productbox">
            <img src="{{$program->image}}" class="img-responsive">
            <div class="producttitle">{{$program->name}}</div>
            <div class="productprice"><div class="pull-right"><a type="button" id="btn-buy" class="btn btn-danger btn-sm" role="button">Detail</a></div><div class="pricetext"></div></div>
        </div>
    </div>
    @endforeach
@else
	<div class="container">
		<h2>Bạn chưa đăng kí chương trình nào</h2>    
	</div>
@endif
<div class="clearfix"></div>

    


