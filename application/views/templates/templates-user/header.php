<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pustaka-Booking | <?= $judul; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png">
	<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow shadow-red-200 bg-red-500">
        <div class="container gap-4">
            <a class="text-white hover:opacity-40 font-bold hover:no-underline" href="<?= base_url(); ?>">Pustaka</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-4">
                    <a class="text-white hover:opacity-40 hover:no-underline active" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                    <?php
                    if (!empty($this->session->userdata('email'))) { ?>
                        <a class="text-white hover:opacity-40 hover:no-underline" href="<?= base_url('booking'); ?>">Booking
						<b>
							<?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?>
						</b>Buku</a>
                        <a class="text-white hover:opacity-40 hover:no-underline" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
                        <a class="text-white hover:opacity-40 hover:no-underline" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a>

                    <?php } else { ?>

                        <a class="text-white hover:opacity-40 hover:no-underline" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fw fa-login"></i> Daftar</a>

                        <a class="text-white hover:opacity-40 hover:no-underline" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a>

                    <?php } ?>
                    <span class="text-white hover:opacity-40 hover:no-underline nav-right" style="display:block; margin-left:20px;">Selamat Datang <b><?= $user; ?></b></span>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
