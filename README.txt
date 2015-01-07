
[iseng]

test apache benchmark bbrp framework:
ab -n 2000 -c 10 [target url]

note :

- apache 2.4.6 ssl
- php 5.4.34 nts
- masing2 php framework diinstall melalui composer.
- pengujian dilakukan 3x per framework
- setiap pengujian per framework dilakukan restart apache terlebih dahulu.
- pengujian dilakukan di laptop ala kadarnya
- test sederhana, hanya untuk menampilkan text 'hellow world' di sisi 'view'

pengujian memang sepertinya tidak 'apple to apple',
krn sy sendiri jg susah sih kalo disuruh makan apple,
mending milih pepaya saja.

ini sekedar pengujian iseng saja,
hanya krn pengin melihat performa bbrp framework yg sempat/sedang sy pakai saat ini.

pengin nyoba jg dengan panada,
baik yg native maupun yg c-extension, tapi ... belum kesempetan nihh.


// next dicoba dengan nginx
