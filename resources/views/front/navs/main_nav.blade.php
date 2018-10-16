
					<div class="c_head clearfix">
						
						<nav>
							<ul class="sf-menu">
								<li class=""><a href="{{ action('PublicPagesController@getIndex') }}"><i class="icon-home"></i></a></li>
								
								<li class="color8"><a href="{{ URL::to('/category/programming') }}">  প্রোগ্রামিং  </a>
									<ul>
										<li><a href="{{ URL::to('/category/c-programming') }}"><i class="icon-gear"></i> সি প্রোগ্রামিং   </a></li>
										<li><a href="{{ URL::to('/category/algorithm') }}"><i class="icon-user"></i>  অ্যালগরিদম  </a></li>
										<li><a href="{{ URL::to('/category/web-development') }}"><i class="icon-camera"></i> ওয়েব ডেভলপমেন্ট  </a>
											<ul>
												<li><a href="{{ URL::to('/category/laravel') }}"> লারাভেল </a></li>
												<li><a href="{{ URL::to('/category/php') }}"> পিএইচপি </a></li>
												<li><a href="{{ URL::to('/category/wordpress') }}"> ওয়ার্ডপ্রেস </a></li>
												
											</ul>
										
										</li>
										<li><a href="{{ URL::to('/category/web-design') }}"><i class="icon-camera"></i> ওয়েব ডিজাইন  </a>
										
											<ul>
												<li><a href="{{ URL::to('/category/html') }}"> এইচটিএমএল </a></li>
												<li><a href="{{ URL::to('/category/css') }}"> সিএসএস </a></li>
												<li><a href="{{ URL::to('/category/bootstrap') }}"> বুটস্ট্রাপ </a></li>
												
											</ul>
										
										</li>
										<li><a href="{{ URL::to('/category/javascript') }}"><i class="icon-map"></i> জাভাস্ক্রিপ্ট </a>
											<ul>
												<li><a href="{{ URL::to('/category/jquery') }}"> জেকুয়েরি  </a></li>
												<li><a href="{{ URL::to('/category/Vue-JS') }}"> Vue JS  </a></li>
												<li><a href="{{ URL::to('/category/Underscore-js') }}"> Underscore JS  </a></li>
												<li><a href="{{ URL::to('/category/angular-JS') }}"> Angular JS  </a></li>
												<li><a href="{{ URL::to('/category/react-js') }}"> React JS  </a></li>
											</ul>
										</li>
										<li><a href="{{ URL::to('/category/python') }}"><i class="icon-map"></i> পাইথন </a></li>
										<li><a href="{{ URL::to('/category/java') }}"><i class="icon-map"></i> জাবা </a></li>
									</ul>
								</li>
								
								
								<li class="color8"><a href="{{ URL::to('/category/graphics') }}"> গ্রাফিক্স </a>
									<ul>
										<li><a href="{{ URL::to('/category/statistics-graphics') }}">স্ট্যাটিক গ্রাফিক্স</a>
											<ul>
												<li><a href="{{ URL::to('/category/photoshop') }}"> ফটোশপ</a></li>
												<li><a href="{{ URL::to('/category/illustrator') }}">ইলাস্ট্রেটর</a></li>
											</ul>
										</li>
										<li><a href="{{ URL::to('/category/motion-graphics') }}">মোশন গ্রাফিক্স</a>
											<ul>
												<li><a href="{{ URL::to('/category/adobe-premiere-pro') }}">এডোবি প্রিমিয়ার প্রো</a></li>
												<li><a href="{{ URL::to('/category/adobe-after-effects') }}">আফটার ইফেক্ট</a></li>
											</ul>
										</li>
									</ul>
								</li>
								
								<li class="color8"><a href="{{ URL::to('/category/database') }}"> ডাটাবেজ </a>
									<ul>
										<li><a href="{{ URL::to('/category/MySql') }}">MySql  </a></li>
										<li><a href="{{ URL::to('/category/Orachol') }}"> Orachol  </a></li>
									</ul>
								</li>
								
								<li class="color8"><a href="{{ URL::to('/category/hobby') }}"> শখ </a>
									<ul class="col2 mega">
										<div class="col2">
											<li><a href="{{ URL::to('/category/aquarium-fish') }}">একুরিয়ামে মাছ পালন</a></li>
											<li><a href="{{ URL::to('/category/gardening') }}">বাগান করা </a></li>
											<li><a href="{{ URL::to('/category/Keeping-the-birds') }}">পাখি পালন</a></li>
											<li><a href="{{ URL::to('/category/Keeping-the-kabutara') }}">কবুতর পালন</a></li>
											<li><a href="{{ URL::to('/category/fish-hunting') }}">মাছ শিকার </a></li>
										</div>
										<div class="col2">
											<li><a href="{{ URL::to('/category/Collect-money') }}">টাকা সংগ্রহ করা </a></li>
											<li><a href="{{ URL::to('/category/Watch-movies') }}">সিনেমা দেখা</a></li>
											<li><a href="{{ URL::to('/category/Trying-to-write-stories') }}"> গল্প লিখার চেষ্টা করা  </a></li>
											<li><a href="{{ URL::to('/category/my-childhood') }}"> আমার ছেলেবেলা  </a></li>
										</div>
									</ul>
								</li>
								
								<li class="color8"><a href="{{ URL::to('/category/book') }}">বই</a></li>
								<li class="color8"><a href="{{ URL::to('/category/Traveling') }}">ভ্রমণ</a></li>
								<li class="color8"><a href="{{ URL::to('/category/science-fiction') }}">সাইন্স ফিকশন</a></li>
								<li class="color8"><a href="{{ action('PublicPagesController@getContact') }}">Contact </a></li>
							</ul>
						</nav>
	
						<div class="right_icons">
							<div class="search">
								<div class="search_icon"><i class="fa-search"></i></div>
								<div class="s_form">
									<form action="" id="search" method="get">
										<input id="inputhead" name="search" type="text" onfocus="if (this.value=='কি খুঁজতে চান...') this.value = '';" onblur="if (this.value=='') this.value = 'কি খুঁজতে চান...';" value="কি খুঁজতে চান..." placeholder="কি খুঁজতে চান ...">
										<button type="submit"><i class="fa-search"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>