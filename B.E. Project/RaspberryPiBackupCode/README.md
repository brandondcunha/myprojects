<b>start_execution:</b><br>
<ul>
<li>This Shell script file is set to run automatically when the raspberry pi boots-up.</li>
<li>This script is responsible to run the other 2 python programs in the current folder.</li>
<li>A timer is set in such a way that the script executes itself after 55 min.</li>
</ul>
<br>
<b>serial_input:</b><br>
<ul>
<li>This script file is responsible to collect data from the arduino connected to the raspberry pi.</li>
<li>The script when executed sends a control signal to arduino by which arduinno sends the sensor values back to raspberry pi.</li>
<li>This collected raw data is processed and stored in a text file.</li>
</ul>
<br>
<b>upload_data</b><br>
<ul>
<li>This script file reads the data stored in the text file created by the above script.</li>
<li>The collected data is uploaded to our online database.</li>
</ul>
<br>
