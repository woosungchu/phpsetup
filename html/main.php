<main>
	<!-- carousel -->
	<div id="myCarousel" class="carousel slide mb-3" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		<?php
			$arr = array(
				array(1,'제주도 그림','2023.4.28~6.29','놀러오세요 제주섬'),
				array(2,'유채꽃 축제 홍보 포스터','2023.3.28~6.23','유채꽃축제 가족들과 함께 놀러오세요'),
				array(3,'백록담 전경','2023.4.22~10.29', '하늘의 거울, 한라산의 백록담'),
				array(4,'가을의 제주도 그림','2023.4.18~9.10','제주도의 계절, 가을입니다')
			);
			foreach($arr as list($index, $title, $date, $description)){
				echo
				'<div class="carousel-item '.($index==1?'active':'').'">
					<img class="d-block w-100" src="assets/image'.$index.'.jpg" alt="'.$title.'" title="'.$title.'">
					<div class="carousel-caption">
						<h5>'.$description.'</h5>
						<p>'.$date.'</p>
					</div>
				</div>';
			}
		?>
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
						$arr = array(
							array(1,'여기 개쩔어요. 맛집도 많습니다','박소연','바로 전','제주도 그림'),
							array(2,'비가 온 다음날이었는데도 진짜 예뻣습니다. 꽃 떨어지기 전에 꼭 가세요','이미영','어제','유채꽃 축제 홍보 포스터'),
							array(3,'가이드님 따라 올라갔는데, 진짜 힘들었지만 제주도 여행 중 여기가 제일 기억에 남습니다.','김수민','2일 전','백록담 전경'),
							array(4,'개별로임','홍정민','3일 전','가을의 제주도 그림')
						);
						foreach($arr as list($index, $text, $writer, $date, $imgtitle)){
							echo
							'<div class="d-flex mb-1">
								<div class="file-thumbnail">
									<img class="w-100 h-100" src="assets/image'.$index.'.jpg" border="0" alt="여행후기'.$index.'." title="여행후기 '.$index.'번째 사진">
								</div>
								<div class="ml-3">
									<h6 class="mb-1"><a href="#" class="small">'.$text.'</a></h6>
									<div class="small">
										<span>'.$writer.'</span><span class="ml-1">'.$date.'</span>
									</div>
								</div>
							</div><hr/>';
						}
					?>
						

					</div>
				</div>
			</div>
		</div>
	</div>
</main>