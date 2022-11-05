
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: labels_pendapatan,
    datasets: [{
      label: 'Total Nilai Kontrak Tahunan',
      data: summary_pendapatan,
      borderWidth: 2,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 150
        }
      }],
      xAxes: [{
        ticks: {
          display: false
        },
        gridLines: {
          display: false
        }
      }]
    },
  }
});

var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: labels_deadline,
    datasets: [{
      label: 'Statistics',
      data: summary_deadline,
      borderWidth: 2,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 150
        }
      }],
      xAxes: [{
        ticks: {
          display: false
        },
        gridLines: {
          display: false
        }
      }]
    },
  }
});

var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        sa1,
        sa2,
        sa3,
        sa4,
        sa5,
        sa6,
        sa7,
        sa8,
        sa9,
        sa10,
        sa11,
        sa12,
        sa13,
      ],
      backgroundColor: [
        '#367E18',
        '#EAB543',
        '#25CCF7',
        '#F97F51',
        '#1B9CFC',
        '#D6A2E8',
        '#FC427B',
        '#55E6C1',
        '#6D214F',
        '#2C3A47',
        '#BDC581',
        '#182C61',
        '#000000'
      ],
      label: 'Dataset 1'
    }],
    labels: [
      'Belum Ada Permintaan',
      'RAB',
      'Pricing',
      'Penawaran',
      'Nego',
      'Belum Kontrak',
      'Kesepakatan Harga',
      'BA Kesepakatan',
      'Kontrak',
      'Laporan / BA',
      'Tagihan',
      'Terbayar',
      'Cancel',
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio : false,
    legend: {
      position: 'bottom',
    },
  }
});

var ctx = document.getElementById("myChart4").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [
        sp1,
        sp2,
        sp3,
        sp4,
      ],
      backgroundColor: [
        '#d2dae2',
        '#4bcffa',
        '#ffd32a',
        '#0be881',
      ],
      label: 'Dataset 1'
    }],
    labels: [
      'Batal',
      'Belum Jalan',
      'Running',
      'Selesai'
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio : false,
    legend: {
      position: 'bottom',
    },
  }
});