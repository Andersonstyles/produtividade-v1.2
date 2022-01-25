<main class="content">
    <?php
        renderTitle(
            'Cadastro de Produtividade',
            'Lance e atualize sua produtividade',
            'icofont-architecture-alt'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <?php if($id): ?>
        <input type="hidden" name="id" value="<?= $id ?>">
        <?php endif ?>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type">tipo</label>
                <input type="text" id="type" name="type" placeholder="Informe o tipo do processo"
                    class="form-control <?= $errors['type'] ? 'is-invalid' : '' ?>"
                    value="<?= $type ?>">
                <div class="invalid-feedback">
                    <?= $errors['type'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="punctuation">Pontuação</label>
                <input type="text" id="punctuation" name="punctuation" placeholder="Informe a pontuação"
                    class="form-control <?= $errors['punctuation'] ? 'is-invalid' : '' ?>"
                    value="<?= $punctuation ?>">
                <div class="invalid-feedback">
                    <?= $errors['punctuation'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="protocol">Protocolo</label>
                <input type="text" id="protocol" name="protocol" placeholder="Informe o número do protocolo"
                    class="form-control <?= $errors['protocol'] ? 'is-invalid' : '' ?>"
                    value="<?= $protocol ?>">
                <div class="invalid-feedback">
                    <?= $errors['protocol'] ?>
                </div>
                </div>
            <div class="form-group col-md-6">
                <label for="applicant">Requerente</label>
                <input type="text" id="applicant" name="applicant" placeholder="Informe o requerente"
                    class="form-control <?= $errors['applicant'] ? 'is-invalid' : '' ?>"
                    value="<?= $applicant ?>">
                <div class="invalid-feedback">
                    <?= $errors['applicant'] ?>
                </div>
            </div>
            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="supervisor">Fiscal Responsável</label>
                <input type="text" id="supervisor" name="supervisor" placeholder="Informe o fiscal"
                    class="form-control <?= $errors['supervisor'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['supervisor'] ?>
                </div>
            </div>
           
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date">Data</label>
                <input type="date" id="date" name="date"
                    class="form-control <?= $errors['date'] ? 'is-invalid' : '' ?>"
                    value="<?= $date ?>">
                <div class="invalid-feedback">
                    <?= $errors['date'] ?>
                </div>
            </div>
           
        <div>
            <button class="btn btn-primary btn-lg">Salvar</button>
            <a href="/activity.php"
                class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </form>
</main>