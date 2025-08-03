<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Weather Forecast</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 2rem;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }
    th, td {
      padding: 10px;
      text-align: left;
      border: 1px solid #ccc;
    }
    th {
      background-color: #ecf0f1;
    }
    tr.rainy {
      background-color: #d6eaf8;
    }
  </style>
</head>
<body>
  <h1>Weekly Weather Forecast</h1>

  <table>
    <thead>
      <tr>
        <th>Day</th>
        <th>High</th>
        <th>Low</th>
        <th>Condition</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($weather as $day)
        <tr class="{{ $day['condition'] === 'Rain' ? 'rainy' : '' }}">
          <td>{{ $day['day'] }}</td>
          <td>{{ $day['high'] }}°F</td>
          <td>{{ $day['low'] }}°F</td>
          <td>{{ $day['condition'] }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="4">No weather data available.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</body>
</html>
