<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Tempo</th>
            <th scope="col">Especialidade</th>
            <th scope="col">Editar</th>
            <th scope="col">Desativar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listaServico as $linha): ?>
            <tr>
                <th scope="row"><?php echo $linha['id_servico'] ?></th>

                <td><a class="img_servico_dash" href="#">
                        <img src=" <?php
                                    $caminhoArquivo = $_SERVER['DOCUMENT_ROOT'] . "/kioficina/public/uploads/" . $linha['foto_galeria'];
                                    if ($linha['foto_galeria'] != "") {
                                        if (file_exists($caminhoArquivo)) {
                                            echo "http://localhost/kioficina/public/uploads/" . htmlspecialchars($linha['foto_galeria'], ENT_QUOTES, 'UTF-8');
                                        } else {
                                            echo "http://localhost/kioficina/public/uploads/galeria/sem_foto_servico.png";
                                        }
                                    } else {
                                        echo "http://localhost/kioficina/public/uploads/galeria/sem_foto_servico.png";
                                    }

                                    ?>" alt="...">
                    </a>
                </td>

                <td><?php echo $linha['nome_servico'] ?></td>
                <td><?php echo $linha['descricao_servico'] ?></td>
                <td><?php echo $linha['preco_base_servico'] ?></td>
                <td><?php echo $linha['tempo_estimado_servico'] ?></td>
                <td><?php echo $linha['id_especialidade'] ?></td>
                <td><i class="bi bi-pen"></i></td>
                <td><i class="bi bi-trash"></i></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>