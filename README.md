
# Тестовое задание для Цифровые сервисы

* Автоматическое определение операционной системы
* Можно выбрать версию
  * PHP
  * mysql (в процессе)
  * redis (в процессе )

## Описание:
В папке ansible находится все необходимое для запуска.
* inventory 
* vars
* full_install.yml ==> плейбук
* roles

#### Все настройки происходят через файл vars/default.yml.
  * Имя домена
  * Пути для nginx а так-же конфиги
  * Порты для firewall
  * Модули PHP
  * Все настройки mysql в том числе репликация и креды
* Выбор версий задается в файле vars/package_versions.yml

#### Фaйл inventory
Фил инвентори сформирован для удобного запуска через gitlab-ci.yml, в этом случае, параметр -i будет совпадать с именем ветки в гите:
```- ansible-playbook -i ansible/inventory/hosts-develop.yml ansible/playbook_name.yml -l $target```
В этом же файле можно задать специфичные для сервера переменные.  
Конечнно все эти переменные можно переопеделить согласно иерархии переменных в ansible

#### run.sh
Для удобства запуска можно использовать bash скрипт run.sh  
Конечно он не одязателен, он нужен был мне, для удобства запуска.


## Использование:
Можно предварительно отредактировать переменные в соответствующих файлах,  либо указать их при старте ansible "-e".  
Для запуска можно использовать мой run.sh, или запустить руками:
```
ansible-playbook -i inventory/hosts-develop.yml full_install.yml -l develop
```
