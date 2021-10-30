using System.Text;
using NUnit.Framework;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using OpenQA.Selenium.Support.UI;


//Prueba unitaria 1. Realizada para testear el ingreso a la págian HOME.

namespace UnitTest
{
    public class Program
    {
        public IWebDriver driver;
        public StringBuilder verificationErrors;
        public string baseURL;

        [SetUp]
        public void TestSetup()
        {
            //Pruebas unitarias se realizan en el navegador de Chrome.
            driver = new ChromeDriver();
            baseURL = "https://www.google.com/";
            verificationErrors = new StringBuilder();
        }

        [Test]
        public void FirstTest()
        {
            //Se maximiza el tamaño de la ventana para poder evitar problemas en el testeo con el layout.
            driver.Manage().Window.Maximize();
            driver.Navigate().GoToUrl("http://40.122.131.222/");
            System.Threading.Thread.Sleep(3000);
            Assert.AreEqual("Inicio", driver.FindElement(By.XPath("//main[@id='maincontent']/div/div/h1")).Text);
        }

        [TearDown]
        public void TestTearDown()
        {
            driver.Quit();
        }
    }
}