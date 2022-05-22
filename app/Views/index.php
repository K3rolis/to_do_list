<?= $this->extend('Layouts/default') ?>
<?= $this->section("title") ?> Pagrindinis <?= $this->endSection() ?>

<?= $this->section("body") ?>


<div class="container" style="margin-top:200px">
	<div class="row mt-3">
		<?= $this->include('Layouts/alerts') ?>

		<form action="task/create" method="post">
			<div class="mb-3">
				<input class="form-control" id="task" name="task"></input>
				<button class="button my-3" name="submit" id="submit">Submit</button>
			</div>
		</form>
	</div>
</div>

<div class="container" style="width: 60%">
	<div class="row">
		<div class="col-2 " style="background-color: F6EDC2">
			KATEGORIJOS
		</div>
		<div class="col-8" style="background-color: FFFBE8">
			<ul>
				<?php foreach ($tasks as $task) : ?>

					<li>
						<?= esc($task['id']) ?>
						<?= esc($task['task']) ?>
					</li>

				<?php endforeach; ?>
			</ul>
		</div>
		<div class="col-2" style="background-color: F6EDC2">

			<?php foreach ($tasks as $task) : ?>

				<li style="list-style: none">
				<a href="Task/delete/<?= $task['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
					<a href="Task/edit/<?= $task['id'] ?>"><i class="fa-solid fa-file-pen"></i></a>
				</li>

			<?php endforeach; ?>

		</div>
	</div>
</div>

<?= $this->endSection() ?>