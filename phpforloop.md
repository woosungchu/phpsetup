

```
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
```

```
<?php
	$arr = array(1,2,3,4);
	foreach($arr as &$i){
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

```

```
<?php
	$arr = array(
		array(1),
		array(2),
		array(3),
		array(4)
	);
	foreach($arr as $item){
		foreach($item as $ea){
			echo
			'<div class="carousel-item '.($ea==1?'active':'').'">
				<img class="d-block w-100" src="assets/image'.$ea.'.jpg" alt="카루셀'.$ea.'" title="'.$ea.'번째 카루셀 사진">
				<div class="carousel-caption">
					<h5>'.$ea.'번째 사진 설명 1</h5>
					<p>'.$ea.'번째 사진 설명 2</p>
				</div>
			</div>';
		}
	}
?>
```

```

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
```