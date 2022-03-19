
# Тестовое задание для Цифровые сервисы
<style>
   .leftimg {
    float:left; /* Выравнивание по левому краю */
    margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
   }
   .rightimg  {
    float: right; /* Выравнивание по правому краю  */ 
    margin: 7px 0 7px 7px; /* Отступы вокруг картинки */
   }
</style>
<div class="center">
<img src="https://hhcdn.ru/employer-logo/3940524.jpeg" alt="logo" class="leftimg" width="80" height="80" >  
<br>


Этот репозиторий является результатом выполнения моего тестового задания, для компании <a href="https://myservices.digital/">Цифровые сервисы</a>
</div>

## Реализовано:
* Автоматическое определение операционной системы
* Можно выбрать версию
  * PHP
  * mysql (в процессе)
  * redis (в процессе )


## Описание:
В папке ansible находится всё необходимое для запуска.
* ```inventory``` 
* ```vars```
* ```full_install.yml``` ==> плейбук
* ```roles```

#### Все настройки происходят через файл vars/default.yml.
  * Имя домена
  * Пути для nginx а так-же конфиги
  * Порты для firewall
  * Модули PHP
  * Все настройки mysql в том числе репликация и креды
* Выбор версий задается в файле ```vars/package_versions.yml```

#### Фaйл inventory
Фаил ```inventory``` сформирован для удобного запуска через ```gitlab-ci.yml```, в этом случае, параметр ```-i``` будет совпадать с именем ветки в гите:
```
- ansible-playbook -i ansible/inventory/hosts-develop.yml ansible/playbook_name.yml -l $target
```
В этом же файле можно задать специфичные для сервера переменные.  
Конечнно все эти переменные можно переопеделить согласно иерархии переменных в ansible

#### run.sh
Для удобства запуска можно использовать bash скрипт ```run.sh```  
Конечно он не обязателен, он нужен был мне, для удобства запуска.  
Запускать можно из любого места, пути к нужным файлам подставятся автоматически.


## Использование:
Первым делом:
```
git clone git@github.com:viktor-gorinskiy/digital_services.git gorinskiy_test
cd gorinskiy_test
```
#### Переменные
Можно предварительно отредактировать переменные в соответствующих файлах,  либо указать их при старте ansible ```-e```.
Для запуска можно использовать мой ```run.sh```, или запустить руками:
```
cd ansible
ansible-playbook -i inventory/hosts-develop.yml full_install.yml -l develop
```
Если использовать свой inventory, то скорее всего надо не забыть указать переменную хоста ```-e ansible_host```:
```
ansible-playbook ansible/full_install.yml -e ansible_host:215.22.33.22

```
