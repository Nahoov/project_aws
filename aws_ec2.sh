#!/bin/bash

# very if a parameter was provided
if [ $# -eq 0 ]; then
    echo "You must provide a parameter. Valid options are 'start', 'stop' and 'terminate'."
    exit 1
fi

# Asign the first parameter to a variable to have a more descriptive name
action="$1"
instance_id="$2"

case "$action" in
    "start")
        if [ -z "$instance_id" ]; then
            ec2_resp=$(aws ec2 run-instances \
            --image-id ami-ami-0b5a42ccb0a949cf1 \
            --instance-type t2.micro \
            --key-name llave_aws \
            --user-data file://user-data-script.sh \
            --security-group-ids sg-0aef23f37ca89a734)

# aws ec2 run-instances --image-id ami-1234567890abcdef0 --count 1 --instance-type t2.micro --key-name mi-clave --user-data file://user-data-script.sh


            echo $ec2_resp
            instance_id=$(echo $ec2_resp | jq -r '.Instances[0].InstanceId')
        else
            aws ec2 start-instances --instance-ids $instance_id
        fi
        ;;
    "stop")
        aws ec2 stop-instances --instance-ids $instance_id
        ;;
    "terminate")
        aws ec2 terminate-instances --instance-ids $instance_id
        ;;
    *)
        echo "El parámetro proporcionado no es válido. Las opciones válidas son 'opcion1' y 'opcion2'."
        exit 1
        ;;
esac

echo "$instance_id"
```


# aws ec2 run-instances --image-id ami-1234567890abcdef0 --count 1 --instance-type t2.micro --key-name my-keypair --user-data file://user-data-script.sh
