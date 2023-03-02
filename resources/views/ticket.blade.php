@extends('layout')
    @section('conteudo')

    <style>
        .ticket {
            background:  linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('assets/ticket.jpg') }}");
            background-color: rgba(0,0,0,0.8);
            background-size: cover;
            border-radius: 20px;
            padding: 20px;
            color: white;
            font-weight: bold;

            text-align: center;
        }
    </style>

    <div class="container site-section">
        <div class="container">

            <div class="row">
                <div class="col-6 title-section">
                    <h2 class="heading">Bilheteria</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="ticket">
                        <div class="ticket-content">
                            <small>Tickets</small>
                            <h1>10</h1>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="form-group w-100">
                            <label for="valor">Cada Ticket custa R$ 1,00</label>
                            <input type="text" name="valor" id="valor" min="10" class="form-control" placeholder="Valor">
                        </div>
                        <div class="form-group w-100 text-center">
                            <button type="button" class="btn btn-success btn-block">Gerar Pix</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mb-4">
                    <div class="custom-media d-block">
                        <div class="text">

                            <span class="meta">Extrato</span>
                            <h3 class="mb-4"><a href="/ticket">Transações</a></h3>
                            <table class="p-5 w-100">
                                <thead>
                                    <tr>
                                        <th>Transação</th>
                                        <th>Data</th>
                                        <th>Valor</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>00012023</td>
                                        <td>10/02/2023</td>
                                        <td>R$ 50,00</td>
                                        <td>Aprovado</td>
                                    </tr>
                                    <tr>
                                        <td>00012024</td>
                                        <td>11/02/2023</td>
                                        <td>R$ 100,00</td>
                                        <td>Cancelado</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection
