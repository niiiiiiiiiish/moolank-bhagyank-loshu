<html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 200px;
                height: 200px;
            }
            td {
                border: 1px solid #000;
                text-align: center;
                font-size: 18px;
                font-weight: bold;
                vertical-align: middle;
                position: relative;
            }
            td .small-number {
                position: absolute;
                top: 5px;
                left: 5px;
                font-size: 10px;
                font-weight: normal;
            }
        </style>

    </head>
    <body>
        <h2>Results</h2>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Gender:</strong> {{ ucfirst($gender) }}</p>
        <p><strong>Date of Birth:</strong> {{ $dob }} (yyyy/mm/dd)</p>
        <p><strong>Moolank (Root Number):</strong> {{ $moolank }}</p>
        <p><strong>Bhagyank (Destiny Number):</strong> {{ $bhagyank }}</p>

        <h3>Loshu Chart:</h3>
        <table>
            <tr>
                <td>
                    {{ $loshuChart[4] }}
                    <span class="small-number">4</span>
                </td>
                <td>
                    {{ $loshuChart[9] }}
                    <span class="small-number">9</span>
                </td>
                <td>
                    {{ $loshuChart[2] }}
                    <span class="small-number">2</span>
                </td>
            </tr>
            <tr>
                <td>
                    {{ $loshuChart[3] }}
                    <span class="small-number">3</span>
                </td>
                <td>
                    {{ $loshuChart[5] }}
                    <span class="small-number">5</span>
                </td>
                <td>
                    {{ $loshuChart[7] }}
                    <span class="small-number">7</span>
                </td>
            </tr>
            <tr>
                <td>
                    {{ $loshuChart[8] }}
                    <span class="small-number">8</span>
                </td>
                <td>
                    {{ $loshuChart[1] }}
                    <span class="small-number">1</span>
                </td>
                <td>
                    {{ $loshuChart[6] }}
                    <span class="small-number">6</span>
                </td>
            </tr>
        </table>
    </body>
</html>
