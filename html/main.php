<main>
	<!-- carousel -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="assets/image1.jpg" alt="롤러코스터" title="뒤집어져 떨어지는 롤러코스터">
				<div class="carousel-caption">
					<h5>뒤집어져 떨어지는 롤러코스터</h5>
					<p>오금이 저리는...</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="assets/image2.jpg" alt="사슴" title="사슴이 풀 먹는 아름다운 자연">
				<div class="carousel-caption">
					<h5>뒤집어져 떨어지는 롤러코스터</h5>
					<p>오금이 저리는...</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="assets/image3.jpg" alt="호랑이" title="야생 속의 호랑이">
				<div class="carousel-caption">
					<h5>뒤집어져 떨어지는 롤러코스터</h5>
					<p>오금이 저리는...</p>
				</div>
				</div>
		</div>
	    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
	    </a>
	</div>

	<!-- inner page -->
	<div class="container">
		<div class="row">
			<div class="col-8">최근에 등록된 여행후기 글목록(최근글) 5개와 더보기 버튼</div>
			<div class="col-4">
				<div class="card">
					<div class="card-header d-flex jc-spbt">
						<h6>최근 여행후기</h6>
						<a href="#">더 보기</a>
					</div>
					<!-- body -->
					<div class="card-body">
					<?php

					for ($x = 1; $x < 4; $x++) {
						echo 
						'<div class="d-flex">
							<div class="file-thumbnail">
								<img class="w-100 h-100" src="assets/image'.$x.'.jpg" border="0" alt="여행후기1">
							</div>
							<div class="ml-3">
								<h6 class="mb-1"><a href="#" class="small">텍스트</a></h6>
								<div class="small">
									<span>주우성</span><span>바로 전</span>
								</div>
							</div>
						</div>';
					}

					?>
						

					</div>
				</div>
			</div>
		</div>
	</div>
</main>