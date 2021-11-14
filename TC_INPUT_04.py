from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys

browser = webdriver.Edge('C:\My Program\Edge\msedgedriver.exe')

browser.get('http://localhost:3000/xampp/htdocs/rpl/testing/index.php')
assert 'Data Akademik' in browser.title

browser.find_element_by_id('nama_mhs').send_keys("Muhammad Faidhorrahman")
browser.find_element_by_id('nim_mhs').send_keys("191081720021")
browser.find_element_by_id('almt_mhs').send_keys("Jalan Yakin 17")
browser.find_element_by_id('no_mhs').send_keys("62816745790")
browser.find_element_by_id('email_mhs').send_keys("faid21")

browser.find_element_by_name('Submit').click()

tag = browser.find_elements(By.TagName('h5'))
assert browser.find_element_by_css_selector(
    "#notif>h5").text("Data Berhasil Dimasukan")
browser.quit
