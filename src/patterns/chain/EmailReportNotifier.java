package patterns.chain;

/**
 * Created by Oleh on 10.11.2017.
 */
public class EmailReportNotifier extends Notifier {
    public EmailReportNotifier(int priority) {
        super(priority);
    }

    @Override
    public void write(String message) {
        System.out.println("Sending Email " + message);
    }
}
