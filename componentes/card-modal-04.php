<!-- Card -->
<div class="card bg-dark m-2" style="width: 12rem;">
    <img src="<?= $item['imagem'] ?>" class="card-img-top" alt="<?= $item['titulo'] ?>" data-bs-toggle="modal" data-bs-target="#<?= $item['id'] ?>">
</div>

<!-- Modal -->
<div class="modal fade" id="<?= $item['id'] ?>" tabindex="-1" aria-labelledby="modal<?= $item['id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog text-white">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal<?= $item['id'] ?>Label"><?= $item['titulo'] ?></h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body"><?= $item['atores'] ?></div>
            <div class="modal-body"><?= $item['diretor'] ?></div>
            <div class="modal-body"><?= $item['lancamento'] ?></div>
            <div class="modal-body"><?= $item['classificacao'] ?></div>
            <div class="modal-body"><?= $item['temporadas'] ?></div>
            <div class="modal-body"><?= $item['episodios'] ?></div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>