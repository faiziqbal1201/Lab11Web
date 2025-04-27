<?= $this->include('template/admin_header'); ?>
<form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn btn-primary">
</form>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($artikel): foreach ($artikel as $row): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td>
                        <b><?= $row['judul']; ?></b>
                        <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
                    </td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach;
        else: ?>
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </tfoot>
</table>
<style>
    ul.pagination {
        width: auto;
        max-width: max-content;
        margin: 0 auto;
        padding: 0;
        display: flex;
        justify-content: center;
        list-style: none;
    }

    .pagination {
        display: flex;
        list-style: none;
        justify-content: center;
        padding: 0;
        margin: 30px 0;
    }

    .pagination li {
        margin: 0;
    }

    .pagination li a,
    .pagination li span {
        display: inline-block;
        padding: 8px 12px;
        text-decoration: none;
        color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
        background: none;
    }

    .pagination li a:hover {
        color: white;
        background-color: #007bff;
    }

    .pagination li.active span {
        color: white;
        background-color: #007bff;
    }

    .pagination li.disabled span {
        color: #ccc;
        pointer-events: none;
    }
</style>
<div class="pagination">
    <?= $pager->only(['q'])->links(); ?>
</div>
<?= $this->include('template/admin_footer'); ?>