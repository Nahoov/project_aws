#!/bin/bash

sudo yum update
sudo yum install -y yum-utils device-mapper-persistent-data lvm2
sudo yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo
sudo yum install amazon-cloudwatch-agent
sudo /opt/aws/amazon-cloudwatch-agent/bin/amazon-cloudwatch-agent-config-wizard
sudo /opt/aws/amazon-cloudwatch-agent/bin/amazon-cloudwatch-agent-ctl -a fetch-config -m ec2 -c file:/path/to/your/config.json -s
sudo yum install -y docker

sudo systemctl start docker
# sudo docker pull ubuntu
# sudo docker run -it --name mi-contenedor-ubuntu ubuntu /bin/bash
#!/bin/bash


# Nombre del archivo Dockerfile
archivo="Dockerfile"

# Contenido del Dockerfile
contenido="FROM python:latest\n\nWORKDIR /app\n\n# Clona el repositorio desde GitHub\nRUN git clone https://github.com/usuario/repo.git .\n\n# Ejecuta la aplicación\nCMD [\"python\", \"app.py\"]"

# Insertar el contenido en el archivo Dockerfile
echo -e $contenido > $archivo

sudo docker build -t python-app .

docker run -d --name python-app -p 80:80 python-app


# ssh-keygen -t rsa -b 4096 -C "soporteneca@outlook.com"


