<x-app-layout>
    <x-slot name="header">
        <h5 class="m-0">{{ __('Dashboard') }}</h5>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
    </x-slot>
    
    <div class="row">
        <!--<div class="col-md-3 invisible">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
  
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                  </p>
  
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>-->

        <div class="col-md-3">
          <div class="small-box bg-gradient-cyan">
            <div class="inner">
              <h3>{{App\Models\Medico::count()}}</h3>
              <p>Médicos</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-md"></i>
            </div>
            <a href="/medicos" class="small-box-footer">
              Ver <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>          
        </div>

        <div class="col-md-3">
          <div class="small-box bg-gradient-green">
            <div class="inner">
              <h3>{{App\Models\Dependiente::count()}}</h3>
              <p>Dependientes</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <a href="/dependientes" class="small-box-footer">
              Ver <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>          
        </div>

        <div class="col-md-3">
          <div class="small-box bg-gradient-red">
            <div class="inner">
              <h3>{{App\Models\Representante::count()}}</h3>
              <p>Representantes</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-tie"></i>
            </div>
            <a href="/representantes" class="small-box-footer">
              Ver <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>          
        </div>

        <div class="col-md-3">
          <div class="small-box bg-gradient-indigo">
            <div class="inner">
              <h3>{{App\Models\Transferencista::count()}}</h3>
              <p>Transferencistas</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-tag"></i>
            </div>
            <a href="transferencistas" class="small-box-footer">
              Ver <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>          
        </div>
    </div>

    <div class="row">
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                <h5 class="card-title">Visitas por Transferencista Q1</h5>
                  <canvas id="canvas1" height="500" width="600"></canvas>
                <a href="/transferencistas" class="card-link">Ver Transferencistas</a>
              </div>
          </div>
      </div>
      <div class="col-md-4"> 
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Visitas por Representante Q1</h5>
              <canvas id="canvas2" height="500" width="600"></canvas>
            <a href="/representantes" class="card-link">Ver Representantes</a>
          </div>
        </div>   
      </div>
      <div class="col-md-4"> 
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Medicos por Ciudad</h5>
              <canvas id="canvas3" height="500" width="600"></canvas>
            <a href="/medicos" class="card-link">Ver Medicos</a>
          </div>
        </div>   
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">

      var labels =  @json($labels_transfer);
      var users =  @json($data_transfer);

      const data = {
        labels: labels,
        datasets: [{
          label: 'Visitas a Dependientes',
          backgroundColor: ['rgb(100, 99, 255)',
                          'rgb(50, 50, 255)',
                          'rgb(150, 99, 100)',
                          'rgb(150, 200, 255)',
                          'rgb(255, 99, 200)',
                          'rgb(100, 100, 100)'],
          borderColor: 'rgb(100, 99, 255)',
          data: users,
        }]
      };
  
      const config = {
        type: 'bar',
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          },
          indexAxis: 'y'
        }
      };

      const myChart = new Chart(
        document.getElementById('canvas1'),
        config
      );

      var labels2 =  @json($labels_rep);
      var users2 =  @json($data_rep);

      const data2 = {
        labels: labels2,
        datasets: [{
          label: 'Visitas a Medicos',
          backgroundColor: ['rgb(100, 99, 255)',
                          'rgb(50, 50, 255)',
                          'rgb(150, 99, 100)',
                          'rgb(150, 200, 255)',
                          'rgb(255, 99, 200)',
                          'rgb(100, 100, 100)'],
          borderColor: 'rgb(100, 99, 255)',
          data: users2,
        }]
      };
  
      const config2 = {
        type: 'bar',
        data: data2,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          },
          indexAxis: 'y'
        }
      };

      const myChart2 = new Chart(
        document.getElementById('canvas2'),
        config2
      );

      var labels3 =  @json($labels_med);
      var users3 =  @json($data_med);

      const data3 = {
        labels: labels3,
        datasets: [{
          label: 'Medicos registrados por departamento',
          backgroundColor: ['rgb(100, 99, 255)',
                          'rgb(50, 50, 255)',
                          'rgb(150, 99, 100)',
                          'rgb(150, 200, 255)',
                          'rgb(255, 99, 200)',
                          'rgb(100, 100, 100)'],
          borderColor: 'rgba(100, 99, 255,0)',
          data: users3,
        }]
      };

      const config3 = {
        type: 'pie',
        data: data3,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          },
          indexAxis: 'y'
        }
      };

      const myChart3 = new Chart(
        document.getElementById('canvas3'),
        config3
      );

    </script>
</x-app-layout>