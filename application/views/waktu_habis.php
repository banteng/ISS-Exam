	<div class="row">
			<div class="box box-danger">
				<div class="box-body">
					<h3 class="text-center">Your Score : </b></h3>
					<h1 class="text-center ujian-sls text-red"><b><?=$detil_tes->nilai;?></b></h1>
					<h1 class="text-center ujian-sls2">Congratulation, you completed the exam !</h1>
					<p class="text-center">You completed the exam <b><?=$detil_soal->nama_ujian.' '.$detil_soal->mapel;?></b></p>
				</div>
				<div class="box-footer">
					<a href="<?=base_url();?>" class="pull-right btn btn-primary"><i class="fa fa-sign-out"></i> Back</a>
				</div>
			</div>
	</div>