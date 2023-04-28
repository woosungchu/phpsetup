<main>
	<!-- carousel -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		<?php
			for($i=1; $i<5;$i++){
				echo
				'<div class="carousel-item '.($i==1?'active':'').'">
					<img class="d-block w-100" src="assets/image'.$i.'.jpg" alt="카루셀'.$i.'" title="'.$i.'번째 카루셀 사진">
					<div class="carousel-caption">
						<h5>'.$i.'번째 사진 설명 1</h5>
						<p>'.$i.'번째 사진 설명 2</p>
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

					for ($x = 1; $x < 5; $x++) {
						echo 
						'<div class="d-flex">
							<div class="file-thumbnail">
								<img class="w-100 h-100" src="assets/image'.$x.'.jpg" border="0" alt="여행후기'.$x.'." title="여행후기 '.$x.'번째 사진">
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