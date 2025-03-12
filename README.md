# WEB BASED AQUARIUM AUTOMATION
## Thingspeak.com
The main feature of this product is to detect the temperature and EC of the aquarium water.

![image](https://github.com/user-attachments/assets/7a8d6277-a181-417a-9ee9-7683603c00df)

## Iot Product Scheme
![image](https://github.com/user-attachments/assets/73dfffe9-8f4e-4750-8aeb-6284549c066b)

Now, let's connect the Analogue TDS Sensor & Temperature Sensor 
DS18B20 with the ESP32 Board. The reason for using the temperature sensor is 
that the temperature parameter is required during the compensation of Electrical Conductivity (EC) Value. 
(EC) value. The EC value may change with the rise and fall of temperature. 
Here is a simple connection diagram for this project.  
1. Connect the Signal leg of the TDS Analogue Sensor to one of the analogue pins on the ESP32 (e.g. pin A0). 
on the ESP32 (example: pin A0). 
2. Connect the VCC (Power) leg of the TDS Analogue Sensor to the 3.3V pin on the 
ESP32. 
3. Connect the GND (Ground) leg of the TDS Analogue Sensor to the GND pin on the 
ESP32. 
4. Connect the DS18B20 Temperature Sensor Data cable to the GPIO pin on the ESP32 
(example: pin 4). 
5. Connect a pull-up resistor of approximately 4.7k ohms between the Data pin and the VCC pin of the DS18B20 Temperature Sensor. 
pin of the DS18B20 Temperature Sensor. 
6. Connect the VCC leg of the DS18B20 Temperature Sensor to the 3.3V pin on the ESP32. 
7. Connect the GND leg of the DS18B20 Temperature Sensor to the GND pin on the ESP32. 
Be sure to check the documentation of your sensor and ESP32 board to 
ensure correct pin usage and voltage requirements. Once 
connections are complete, you can start developing a programme to read the 
data from both sensors and perform EC value compensation based on the measured temperature 
measured. 
8. Mechatronic Components 
- ESP32 Board 
- Analogue TDS Sensor 
- DS81B20 Temperature Sensor 
- 4.7K Resistor 
- Connecting Wires 
- Breadboard

## Result
![image](https://github.com/user-attachments/assets/1b8004a2-583d-439e-a455-90490be899c4)


