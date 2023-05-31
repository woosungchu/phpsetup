<main style="padding-top:70px;">
	<div class="container">
		<!-- carousel -->
		<div id="myCarousel" class="carousel slide mb-5" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			<?php
				$arr = array(
					array(0,'제주도 그림','2023.4.28~6.29','놀러오세요 제주섬'),
					array(1,'유채꽃 축제 홍보 포스터','2023.3.28~6.23','유채꽃축제 가족들과 함께 놀러오세요'),
					array(2,'백록담 전경','2023.4.22~10.29', '하늘의 거울, 한라산의 백록담'),
					array(3,'가을의 제주도 그림','2023.4.18~9.10','제주도의 계절, 가을입니다')
				);
				foreach($arr as list($index, $title, $date, $description)){
					echo
					'<div class="carousel-item '.($index==1?'active':'').'">
						<img class="d-block w-100" src="assets/carousel'.$index.'.jpg" alt="'.$title.'" title="'.$title.'">
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
		</div><!-- carousel 끝-->

		<!-- 추천 여행지 -->
		<div class="row">
			<div id="reco-box" class="card" style="width:100%">
				<div class="card-header bg-jeju-reverse">
					<h5>추천 여행지 목록</h5>
				</div>
				<div class="card-body">
					<div class="row flex-row flex-nowrap jeju-scrollbar" style="overflow-x:scroll;">
						<?php

							/* data */
							$arr = array(
								array(0,'투명한 에메랄드빛 해변','방금 전','해발 1,950m로 우리나라에서 가장 높은 산인 한라산은 제주 여행에 있어 빼놓을 수 없는 곳이에요. 신비로운 백록담과 계절마다 색다른 아름다움을 간직한 한라산 탐방은 오랫동안 잊지 못할 추억이 될 거예요. 한라산 탐방 코스는 백록담 정상까지 오르는 관음사, 성판악 코스와 윗세오름 및 남벽분기점까지 오르는 영실, 어리목, 돈내코 코스가 있어요. 탐방로마다 난이도와 소요시간이 다르므로 각자의 체력에 맞게 코스를 선택해보세요. 계절과 날씨에 따라 일부 통제되는 구간이 있을 수도 있으니 탐방에 앞서 국립공원 홈페이지에서 탐방 정보를 확인하세요.'),
								array(1,'아름답게 눈이 내린 숲길','2시간 전','제주를 여행한다면 수많은 관광 명소 중 어디를 가야할 지 행복한 고민을 하게 되죠. 산과 오름, 해변, 폭포, 용암동굴, 주변 섬 등 어디를 가나 천혜의 아름다운 자연 경관을 만날 수 있어요. 걷기를 좋아한다면 올레, 숲길, 휴양림 등의 다양한 형태의 명소들을 찾을 수 있어요. 아이들과 함께 라면 박물관, 미술관, 과학관, 테마파크, 민속공원 등 수많은 선택지에 놀랄 거예요. 선택의 폭이 너무 넓기 때문에 일정과 숙소에 맞춰 사전 계획을 세우는 것은 필수예요.'),
								array(2,'아침을 깨우는 햇살','6시간 전','성산일출봉은 제주를 대표하는 자연경관 중 하나로 제주의 많은 분화구 중 드물게 바다에서 분출한 화산이에요. 약 30분 정도 소요되는 182m 정상에 올라 보세요. 정상에 오르면 지름 600m의 분화구를 볼 수 있죠. 분화구의 가장자리가 성벽처럼 보인다고 하여 성산, 정상에서 보는 일출이 장관이라고 하여 일출봉이라 해요. 매일 아침에는 일출을 보기 위해 오르는 관광객으로 늘 붐비죠. 입구의 푸른 초원에서는 멋진 사진도 찍고, 우도와 푸른 바다가 보이는 절경을 감상하며 산책할 수 있어요.')
							);



							for ( $x=0; $x<=3; $x++){

								foreach($arr as list($idx,$title,$regDate,$text)){
								
									echo '<div class="card col-lg-3 col-md-5 col-sm-8">
											<img class="card-img-top" src="assets/reco'.$idx.'.jpg" alt="" title="'.$title.'"/>
											<div class="card-body">
												<div class="card-title">'.$title.'</div>
												<div class="card-subtitle text-muted">서귀포시 | '.$date.'</div>
											</div>
										</div>';
								}


							}
						?>
					</div>
					<div class="row mt-4">
						<button class="btn" style="margin:0 auto; outline:lightgrey solid 1px">추천여행지 더보기</button>
					</div>
				</div><!-- card body -->
			</div>
		</div>




		<!-- 여행후기 -->
		<div class="row">
			<div id="review-box" class="card" style="width:100%">
				<div class="card-header bg-jeju-reverse">
					<h3>여행후기</h3>					
				</div>
				<div class="card-body">
					<ul class="nav nav-pills nav-fill">
					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">지역별</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">테마별</a>
					  </li>
					</ul>
				</div>
			</div>
		</div>


	</div>

</main>