using System;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading;
using NUnit.Framework;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using OpenQA.Selenium.Support.UI;

namespace SeleniumTests
{
    [TestFixture]
    public class UntitledTestCase
    {
        private IWebDriver driver;
        private StringBuilder verificationErrors;
        private string baseURL;
        private bool acceptNextAlert = true;
        
        [SetUp]
        public void SetupTest()
        {
            driver = new ChromeDriver();
            baseURL = "https://www.google.com/";
            verificationErrors = new StringBuilder();
        }
        
        [TearDown]
        public void TeardownTest()
        {
            try
            {
                driver.Quit();
            }
            catch (Exception)
            {
                // Ignore errors if unable to close the browser
            }
            Assert.AreEqual("", verificationErrors.ToString());
        }
        
        [Test]
        public void TheUntitledTestCaseTest()
        {
            driver.Manage().Window.Maximize();
            driver.Navigate().GoToUrl("http://40.122.131.222/");
            System.Threading.Thread.Sleep(3000);
            driver.FindElement(By.LinkText("Acerca de nosotros")).Click();
            System.Threading.Thread.Sleep(3000);
            driver.FindElement(By.LinkText("Contacto")).Click();
            System.Threading.Thread.Sleep(3000);
            driver.FindElement(By.Name("your-name")).Click();
            driver.FindElement(By.Name("your-name")).Clear();
            driver.FindElement(By.Name("your-name")).SendKeys("Ignacio");
            driver.FindElement(By.Name("your-email")).Clear();
            driver.FindElement(By.Name("your-email")).SendKeys("Yon");
            driver.FindElement(By.Name("your-subject")).Clear();
            driver.FindElement(By.Name("your-subject")).SendKeys("motivo");
        }
    }
}