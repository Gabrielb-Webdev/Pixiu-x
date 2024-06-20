import os
import pandas as pd
from PIL import Image
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from webdriver_manager.chrome import ChromeDriverManager

def convert_to_webp(image_path, output_path):
    """Convert an image to WebP format."""
    with Image.open(image_path) as img:
        img.save(output_path, "webp")

def main(base_path):
    # Configure Selenium WebDriver
    chrome_options = Options()
    chrome_options.add_argument("--headless")  # Run headless for automation
    service = Service(ChromeDriverManager().install())
    driver = webdriver.Chrome(service=service, options=chrome_options)

    # Loop through each image in the directory
    for filename in os.listdir(base_path):
        image_path = os.path.join(base_path, filename)
        if not os.path.isfile(image_path):
            continue

        output_path = os.path.splitext(image_path)[0] + ".webp"
        try:
            convert_to_webp(image_path, output_path)
            print(f"Converted {image_path} to {output_path}")
        except Exception as e:
            print(f"Failed to convert {image_path}: {e}")

    driver.quit()

if __name__ == "__main__":
    base_path = "D:/ludmi/Documents/Work Gabriel/Pixiu-x/sources/images/"  # Base path for image files
    main(base_path)
