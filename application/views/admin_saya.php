<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partial/head') ?>
</head>
<body>
    <?php $this->load->view('partial/navbar') ?>
    <div class="container-fluid">
        <div class="row justify-content-center" >
            <div class="col-lg-10">
                <h1>Dashboard Admin</h1>
                
            </div>
        </div>
        

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2>Masyarakat</h2>
                <hr>
            </div>
            
            <div class="col-lg-10">
                <table id="masyarakat">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Telp</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                        foreach ($masyarakat as $data):
                    ?>
                        <tr>
                            <td><?php echo $data->nik ?></td>
                            <td><?php echo $data->nama ?></td>
                            <td><?php echo $data->username ?></td>
                            <td><?php echo $data->telp ?></td>
                            <td><?php echo $data->status ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-10">
                <table id="petugas">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Telp</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($petugas as $data_petugas): ?>
                        <tr>
                            <td><?php echo $data_petugas->id_petugas ?></td>
                            <td><?php echo $data_petugas->nama_petugas ?></td>
                            <td><?php echo $data_petugas->username ?></td>
                            <td><?php echo $data_petugas->telp ?></td>
                            <td><?php echo $data_petugas->level ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php $this->load->view('partial/script') ?>
    <script>
        $(document).ready(function() {
            $('#masyarakat').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
        
    </script>

    <script>
        $(document).ready(function() {
            $('#petugas').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
        
    </script>       
</body>
</html>