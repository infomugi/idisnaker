<style type="text/css">
    #header{background:#000;color:#FFF;padding:10px;text-align: center}
    #konten{background:#FFF;color:#000;padding:10px;text-align: center}
    #signature{width:100%;background:#FFF;color:#000;padding:10px;text-align: center;}
    #kiri,#tengah,#kanan{width: 100px;}
    #kiri{float: left}
    #kanan{float: right}
    #bold{font-family: bold;}
    #footer{background:#000;color:#FFF;padding:10px;text-align: center;font-size: 10px}
    #serial{background:#0C8771;color:#FFF;padding:10px;text-align: center}
    body{font-family: Keep Calm Med}
    #bold{font-family: Keep Calm Med}
</style>

<page id="page">

    <div id="header">
        <H1>C E R T I F I C A T E</H1>
    </div>
    <div id="serial">
    Certificate Serial : <?php echo $model->code; ?>
    </div>
    <div id="konten">
        <H2><i><?php echo ucwords($model->Event->name); ?></i></H2>
        <H2><?php echo ucwords($model->Member->first_name) . " " . ucwords($model->Member->last_name); ?></H2>
        <p>As :</p>
        <H2>Participant</H2>
        <H4><i>PRESENTED BY</i></H4>
        <H1 id="bold">DINAS TENAGA KERJA KAB. BANDUNG</H1>
        <H4><i>Bandung, <?php echo date('d-m-Y'); ?></i></H4>
    </div>


    <table id="signature">
        <tr>
            <td style="text-align: center;width: 33%">
                <BR><BR><BR><BR><BR><BR><BR>
                    <B>Drs. Rukmana M.Si</B>
                    <BR>
                        Kepala Dinas Tenaga Kerja
                    </td>
                    <td style="text-align: center;width: 34%">                
                     <img style="width:155px;" src="http://localhost/project_skripsi_disnaker/image/qrcode/<?php echo $model->id_certificate; ?>.png">
                     <BR>
                        <B style="font-family:arial">KEY : <?php echo gmp_strval($model->privatekey,16); ?></B>
                    </td>
                    <td style="text-align: center;width: 33%"> 
                        <BR><BR><BR><BR><BR><BR><BR>              
                            <B>Hj. Nunung Nuraisyah, S.Sos M.Si</B>
                            <BR>
                                Ketua Pelaksana Kegiatan</td>
                            </tr>
                        </table>

                        <div id="footer">
                            Scan QR Code and Enter the Key to Verify This Certificate - Powered by : DISNAKER (Dinas Tenaga Kerja Kabupaten Bandung)
                        </div>

                    </page>  