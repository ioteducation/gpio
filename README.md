# GPIO

Biblioteca PHP para controle das portas GPIO do Raspberry 3

## Requisitos

* PHP >= 7.2.*

## Ambiente

Testado no raspbian 9 com PHP 7.2

## Instalação

Instale diretamente no terminal de comando com composer:

```bash
composer require ioteducation/gpio
```

ou adicione em seu arquivo `composer.json`:

```json
"require": {
    "ioteducation/gpio": "^0.1.0"
},
```

e no terminal:

```bash
composer update
```

## Exemplos

### Atuadores

```php
use I9IoT\GPIO\Device\Device;
use I9IoT\GPIO\Pin\PinMode;
use I9IoT\GPIO\Pin\PinState;

$device = new Device();
$device->newPin(26, PinMode::OUTPUT);

// Equivalente ao digitalWrite(26,HIGH) do arduino
$device->actions->digitalWrite(26, PinState::HIGH);

// Equivalente ao digitalWrite(26,LOW) do arduino
$device->actions->digitalWrite(26, PinState::LOW);

// Equivalente ao digitalRead(26) do arduino
echo $device->actions->digitalRead(26);
```

## Em breve

* Sensores
* Interrupções
* PWM
* Funções alternativas para `newPin`:
  * `newOutput`
  * `newInput`
  * `newPWM`
  * `newInterrupt`
  * Entre outras

## Desenvolvimento

Esse projeto é uma parceria da IoT Education com a I9 IoT.

### IoT Education

* **Cidade:** Indaiatuba - SP
* **Ramo:** Consultoria e Treinamento IoT

### I9 IoT (Startup)

* **Cidade:** Indaiatuba - SP
* **Ramo:** Consultoria e Desenvolvimento de sistemas IoT
