/* global hljs, $ */

try { hljs.highlightAll() } catch (e) {}

// Smooth-scroll (exclude Bootstrap tab links and carousel controls)
document.querySelectorAll('a[href^="#"]:not([data-toggle="tab"]):not([data-slide])').forEach(function (a) {
  a.addEventListener('click', function (e) {
    const target = document.querySelector(this.getAttribute('href'))
    if (target) {
      e.preventDefault()
      window.scrollTo({ top: target.offsetTop - 60, behavior: 'smooth' })
    }
  })
})

// Active nav link on scroll
window.addEventListener('scroll', function () {
  const sections = ['hero', 'screenshots', 'features', 'integration', 'download']
  const scrollY = window.scrollY + 80
  sections.forEach(function (id) {
    const el = document.getElementById(id)
    if (!el) return
    const link = document.querySelector('.navbar-nav a[href="#' + id + '"]')
    if (!link) return
    if (scrollY >= el.offsetTop && scrollY < el.offsetTop + el.offsetHeight) {
      document.querySelectorAll('.navbar-nav li').forEach(function (li) { li.classList.remove('active') })
      link.parentElement.classList.add('active')
    }
  })
})

// Lightbox
$(function () {
  const $overlay = $('#lightboxOverlay')
  const $img = $('#lightboxImg')

  function openLightbox (src, alt) {
    $img.attr('src', src).attr('alt', alt || '')
    $overlay.fadeIn(180)
    $('body').css('overflow', 'hidden')
  }

  function closeLightbox () {
    $overlay.fadeOut(150, function () { $img.attr('src', '') })
    $('body').css('overflow', '')
  }

  $(document).on('click', '.carousel-img', function (e) {
    e.stopPropagation()
    openLightbox($(this).attr('data-full') || this.src, $(this).attr('alt'))
  })

  $('#lightboxClose').on('click', closeLightbox)
  $overlay.on('click', function (e) { if (e.target === this) closeLightbox() })
  $(document).on('keydown', function (e) { if (e.key === 'Escape') closeLightbox() })
  $img.on('click', function (e) { e.stopPropagation() })
})
