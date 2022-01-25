<main class="content">
    <?php
        renderTitle(
            'Cadastro de Produtividade',
            'Mantenha sua produtividade atualizada',
            'icofont-architecture-alt'
        );

        include(TEMPLATE_PATH . "/messages.php");
        ?>

        <a class="btn btn-lg btn-primary mb-3"
            href="save_activity.php">Produtividade</a>

    <form class="mb-4" action="#" method="post">
			<div class="input-group">
				<?php if($user->is_admin): ?>
					<select name="supervisor" class="form-control mr-2" placeholder="Selecione o fiscal...">
						<option value="">Selecione o fiscal</option>
						<?php
							foreach($activities as $activity) {
								$selected = $activity->id === $selectedUserId ? 'selected' : '';
								echo "<option value='{$activity->id}' {$selected}>{$activity->name}</option>";
							}
						?>
					</select>
				<?php endif ?>
				<select name="period" class="form-control" placeholder="Selecione o período...">
					<?php
						foreach($periods as $key => $month) {
							$selected = $key === $selectedPeriod ? 'selected' : '';
							echo "<option value='{$key}' {$selected}>{$month}</option>";
						}
					?>
				</select>
				<button class="btn btn-primary ml-2">
					<i class="icofont-search"></i>
				</button>
			</div>
		</form>


    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Protocolo</th>
            <th>Requerente</th>
            <th>Tipo</th>
            <th>Pontuação</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($activities as $activity): ?>
                <tr>
                    <td><?= $activity->protocol ?></td>
                    <td><?= $activity->applicant ?></td>
                    <td><?= $activity->type ?></td>
                    <td><?= $activity->punctuation ?></td>
                    <td>
                        <a href="save_activity.php?update=<?= $activity->id ?>" 
                            class="btn btn-warning rounded-circle mr-2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $activity->id ?>"
                            class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</main>