var cacheName = 'NomeApp-v';
var filesToCache = [
  '/rede_akiba_2.0',
  '/rede_akiba_2.0/site/assets/css/main.css',
  '/rede_akiba_2.0/site/assets/js/main.js'
];
self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(filesToCache);
    })
  );
});
self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});