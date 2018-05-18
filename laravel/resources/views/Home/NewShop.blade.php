					<div class='wrapper_top_shop'>
						<div class='product-sec1'>
							@foreach($BookData['data'] as $key => $val)
							<div class='col-md-3 product-men'>
								<div class='product-chr-info chr'>
									<div class='thumbnail'>
										<a href='single_product.html'>
											<img src="{{URL::asset($val['b_img'])}}" width='300' height='300' alt=''>
										</a>
									</div>
									<div class='caption'>
										<h4>{{$val['b_name']}}</h4>
										<p>{{$val['b_auther']}}</p>
										<div class='matrlf-mid'>
											<ul class='rating'>
												<li>
													<a href='#'>
														<span class='fa fa-star yellow-star' aria-hidden='true'></span>
													</a>
												</li>
												<li>
													<a href='#'>
														<span class='fa fa-star yellow-star' aria-hidden='true'></span>
													</a>
												</li>
												<li>
													<a href='#'>
														<span class='fa fa-star yellow-star' aria-hidden='true'></span>
													</a>
												</li>
												<li>
													<a href='#'>
														<span class='fa fa-star gray-star' aria-hidden='true'></span>
													</a>
												</li>
												<li>
													<a href='#'>
														<span class='fa fa-star gray-star' aria-hidden='true'></span>
													</a>
												</li>
											</ul>
											<ul class='price-list'>
											@if($val['is_hot'] == '1' AND $val['is_new'] == '1' )
												<p>最热+最新</p>
											@elseif($val['is_hot'] == '1')
												<p>最热</p>
											@elseif($val['is_new'] == '1')
												<p>最新</p>
											@else
												<p>请查看</p>
											@endif 
											</ul>

											<div class='clearfix'> </div>
										</div>
										<form action="{{ url('/Home/home/BorrowBooks') }}" method='post'>
										{{csrf_field()}} 
											<button type='submit' class='chr-cart pchr-cart'>去借书
											</button>
											<a href='#' data-toggle='modal' data-target='#myModal1'></a>
											<input type='hidden' name='b_id' value="{{$val['b_id']}}">
										</form>
									</div>
								</div>
							</div>
							@endforeach
							<div id="_page" style="position: absolute;left: 0px;top: 602px;">
								<button style="margin-left: 380px;" page="1"  class="page">首页</button>
								<button page="{{ $BookData['up'] }}" class="page">上一页</button>
								<button page="{{ $BookData['next'] }}" class="page">下一页</button>
								<button page="{{ $BookData['last'] }}" class="page">尾页</button>
								<span>{{ $BookData['NowPage'] }}/{{ $BookData['last'] }}</span>
							</div>